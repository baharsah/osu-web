<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('osu_beatmapsets', function (Blueprint $table) {
            $table->smallInteger('main_ruleset')->nullable(); // negative number for undetermined main_ruleset.
        });
    }

    public function down(): void
    {
        Schema::table('osu_beatmapsets', function (Blueprint $table) {
            $table->dropColumn('main_ruleset');
        });
    }
};
