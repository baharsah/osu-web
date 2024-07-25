<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Models;

use Carbon\CarbonImmutable;
use Ds\Set;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DailyChallengeUserStats extends Model
{
    public $incrementing = false;
    public $timestamps = false;

    protected $attributes = [
        'daily_streak_best' => 0,
        'daily_streak_current' => 0,
        'playcount' => 0,
        'top_10p_placements' => 0,
        'top_50p_placements' => 0,
        'weekly_streak_best' => 0,
        'weekly_streak_current' => 0,
    ];

    protected $casts = [
        'last_update' => 'datetime',
        'last_weekly_streak' => 'datetime',
    ];
    protected $primaryKey = 'user_id';
    protected $table = 'daily_challenge_user_stats';

    public static function calculate(CarbonImmutable $date): void
    {
        $startTime = $date->startOfDay();
        $currentWeek = $startTime->startOfWeek(CarbonImmutable::THURSDAY);
        $previousWeek = $currentWeek->subWeeks(1);
        // this function assumes one daily challenge per day and one playlist item per daily challenge
        $playlist = Multiplayer\Room::dailyChallengeFor($startTime)?->playlist[0] ?? null;

        if ($playlist === null) {
            // or maybe do something with existing streaks
            return;
        }

        $highScores = $playlist
            ->highScores()
            ->where('total_score', '>', 0)
            ->orderBy('total_score', 'DESC')
            ->get();
        $count = $highScores->count();
        // these variables are only used if there's anything in the array
        if ($count > 0) {
            $top50p = $highScores[(int) ($count * 0.5)]->total_score;
            $top10p = $highScores[(int) ($count * 0.1)]->total_score;
        }
        $highScoresByUserId = [];
        foreach ($highScores as $highScore) {
            $highScoresByUserId[$highScore->user_id] = $highScore;
        }
        $statsByUserId = static
            ::where(fn ($q) => $q
                ->where('last_weekly_streak', '>=', $previousWeek->subDays(1))
                ->where('last_update', '<', $startTime))
            ->orWhereIn('user_id', array_keys($highScoresByUserId))
            ->get()
            ->keyBy('user_id');
        $userIds = new Set([...$statsByUserId->keys(), ...array_keys($highScoresByUserId)]);
        foreach ($userIds as $userId) {
            $stats = $statsByUserId[$userId] ?? new static([
                'user_id' => $userId,
            ]);
            // ignore processed scores
            if (($stats->last_update ?? $previousWeek) >= $startTime) {
                continue;
            }
            $highScore = $highScoresByUserId[$userId] ?? null;
            if ($highScore === null) {
                $stats->daily_streak_current = 0;
                if ($stats->last_weekly_streak < $previousWeek) {
                    $stats->weekly_streak_current = 0;
                }
            } else {
                $stats->playcount += 1;

                $stats->daily_streak_current += 1;
                if (($stats->last_weekly_streak ?? $previousWeek) < $currentWeek) {
                    $stats->weekly_streak_current += 1;
                }
                $stats->last_update = $startTime;
                $stats->last_weekly_streak = $currentWeek;

                foreach (['daily', 'weekly'] as $type) {
                    if ($stats["{$type}_streak_best"] < $stats["{$type}_streak_current"]) {
                        $stats["{$type}_streak_best"] = $stats["{$type}_streak_current"];
                    }
                }

                if ($highScore->total_score >= $top10p) {
                    $stats->top_10p_placements += 1;
                } elseif ($highScore->total_score >= $top50p) {
                    $stats->top_50p_placements += 1;
                }
            }

            $stats->save();
        }
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}