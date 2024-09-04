<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

return [
    'deleted' => '[выдалены карыстальнік]',

    'beatmapset_activities' => [
        'title' => "Гісторыя рэдагавання бітмап карыстальніка :user",
        'title_compact' => 'Мадаванне',

        'discussions' => [
            'title_recent' => 'Нядаўна пачатыя абмеркаванні',
        ],

        'events' => [
            'title_recent' => 'Апошнія падзеі',
        ],

        'posts' => [
            'title_recent' => 'Нядаўнія допісы',
        ],

        'votes_received' => [
            'title_most' => 'Самыя папулярныя ад (за 3 месяцы)',
        ],

        'votes_made' => [
            'title_most' => 'Самыя папулярныя (за 3 месяцы)',
        ],
    ],

    'blocks' => [
        'banner_text' => 'Вы заблакавалі гэтага карыстальніка.',
        'comment_text' => 'Гэты каментар скрыты.',
        'blocked_count' => 'заблакаваныя карыстальнікі (:count)',
        'hide_profile' => 'схаваць профіль',
        'hide_comment' => 'схаваць',
        'forum_post_text' => 'Гэты пост схаваны.',
        'not_blocked' => 'Гэты карыстальнік не заблакаваны.',
        'show_profile' => 'паказаць профіль',
        'show_comment' => 'паказаць',
        'too_many' => 'Дасягнуты ліміт блакавання.',
        'button' => [
            'block' => 'заблакаваць',
            'unblock' => 'адблакаваць',
        ],
    ],

    'card' => [
        'gift_supporter' => 'Падарыць тэг osu!supporter',
        'loading' => 'Загрузка...',
        'send_message' => 'адправіць паведамленне',
    ],

    'create' => [
        'form' => [
            'password' => 'пароль',
            'password_confirmation' => 'паўтарыце пароль',
            'submit' => 'стварыць акаўнт',
            'user_email' => 'пошта',
            'user_email_confirmation' => 'паўтарыце пошту',
            'username' => 'нікнэйм',

            'tos_notice' => [
                '_' => 'ствараючы акаўнт, вы згаджаецеся з :link',
                'link' => 'ўмовамі выкарыстання',
            ],
        ],
    ],

    'disabled' => [
        'title' => 'А-а-а! Здаецца, ваш акаўнт быў адключаны.',
        'warning' => "Калі вы парушылі правіла, звярніце ўвагу, што, як правіла, існуе перыяд ахаладжэння ў месяц, на працягу якога мы не будзем разглядаць просьбы аб амністыі. Па заканчэнні гэтага перыуду вы можаце звязацца з намі, калі палічыце патрэбным. Звярніце ўвагу, што стварэнне новых акаўнтаў пасля адключэння прывядзе да <strong> падаўжэння гэтага месячнага астуджэння </strong>. Таксама звярніце ўвагу, што для <strong> кожнага акаўнту вы ў далейшым парушаеце правілы </strong>. Мы настойліва раім вам не ісці па гэтым шляху!",

        'if_mistake' => [
            '_' => 'Калі вы лічыце, што гэта памылка, вы можаце звязацца з намі (праз :email альбо націснуўшы "?" у правым ніжнім куце гэтай старонкі). Звярніце ўвагу, што мы заўсёды цалкам упэўнены ў сваіх дзеяннях. Мы пакідаем за сабой права не прымаць вашыя просьбы, калі адчуем, што вы наўмысна несумленныя.',
            'email' => 'емэйл',
        ],

        'reasons' => [
            'compromised' => 'Ваш акаўнт прызнаны скампраметаваным. Ён можа быць часова адключаны, пакуль будзе пацверджана яго асоба.',
            'opening' => 'Існуе шэраг прычын, па якіх ваш акаўнт можа быць адключаным:',

            'tos' => [
                '_' => 'Вы парушылі адно або некалькі нашых :community_rules або :tos.',
                'community_rules' => 'правілы супольнасці',
                'tos' => 'ўмовы абслугоўвання',
            ],
        ],
    ],

    'filtering' => [
        'by_game_mode' => 'Удзельнікі па рэжыме гульні',
    ],

    'force_reactivation' => [
        'reason' => [
            'inactive' => "",
            'inactive_different_country' => "Ваш акаўнт не выкарыстоўваўся доўгі час.",
        ],
    ],

    'login' => [
        '_' => 'Увайсці',
        'button' => 'Увайсці',
        'button_posting' => 'Уваход...',
        'email_login_disabled' => 'Уваход па электроннай пошце ў гэты час адключаны. Калі ласка, выкарыстоўвайце імя карыстальніка замест гэтага.',
        'failed' => 'Няправільны ўваход',
        'forgot' => 'Забылі свой пароль?',
        'info' => 'Калі ласка увайдзіце, каб працягнуць',
        'invalid_captcha' => 'Зашмат няўдалых спроб увайсці, запоўніце капчу і паўтарыце спробу. (Абнавіце старонку, калі капчу не відаць)',
        'locked_ip' => 'ваш IP-адрас заблакаваны. Пачакайце некалькі хвілін.',
        'password' => 'Пароль',
        'register' => "Вы яшчэ не маеце акаўнту osu!? Стварыце новы",
        'remember' => 'Запомніць гэта камп\'ютар',
        'title' => 'Каб працягнуць, увайдзіце',
        'username' => 'Імя карыстальніка',

        'beta' => [
            'main' => 'Доступ да бэта-версіі абмежаваны.',
            'small' => '(osu!supporters хутка атрымаць доступ)',
        ],
    ],

    'ogp' => [
        'modding_description' => '',
        'modding_description_empty' => '',

        'description' => [
            '_' => '',
            'country' => '',
            'global' => '',
        ],
    ],

    'posts' => [
        'title' => 'допісаў :username',
    ],

    'anonymous' => [
        'login_link' => 'націсніце, каб увайсці',
        'login_text' => 'увайсці',
        'username' => 'Госць',
        'error' => 'Каб зрабіць гэта, вам трэба ўвайсці.',
    ],
    'logout_confirm' => 'Вы ўпэўнены, што хочаце выйсці? :(',
    'report' => [
        'button_text' => 'справаздача',
        'comments' => 'Дадатковыя каментарыі',
        'placeholder' => 'Калі ласка, паведаміце любую інфармацыю, якую лічаце карыснай.',
        'reason' => 'Прычына',
        'thanks' => 'Дзякуем за ваш даклад!',
        'title' => 'Паскардзіцца на :username?',

        'actions' => [
            'send' => 'Адправіць скаргу',
            'cancel' => 'Скасаваць',
        ],

        'options' => [
            'cheating' => 'Несумленная гульня / Чыты',
            'multiple_accounts' => 'Выкарыстанне некалькіх акаўнтаў',
            'insults' => 'Абраза мяне / іншых',
            'spam' => 'Спам',
            'unwanted_content' => 'Неадпаведна звязанае змесціва',
            'nonsense' => 'Лухта',
            'other' => 'Іншы (пішыце ніжэй)',
        ],
    ],
    'restricted_banner' => [
        'title' => 'Ваш акаўнт быў абмежаваны!',
        'message' => 'Падчас абмежавання, вы не можаце ўзаемадзейнічаць з іншымі гульцамі, а вашы вынікі будуць бачны толькі вам. Звычайна гэта вынік аўтаматычнага працэсу, які зазвычай знікае праз суткі. Калі вы хочаце скасаваць сваё абмежаванне, калі ласка <a href="mailto:accounts@ppy.sh">звяжыцеся з намі</a>.',
        'message_link' => 'Праверце гэту старонку, каб даведацца больш.',
    ],
    'show' => [
        'age' => ':age год',
        'change_avatar' => 'змяніць аватар!',
        'first_members' => 'Тут з самага пачатку',
        'is_developer' => 'osu!developer',
        'is_supporter' => 'osu!supporter',
        'joined_at' => 'Далучыўся :date',
        'lastvisit' => 'Быў у сетцы :date',
        'lastvisit_online' => 'Зараз у сетцы',
        'missingtext' => 'Магчыма, вы памыліліся! (або карыстальнік заблакаваны)',
        'origin_country' => 'Адкуль: :country',
        'previous_usernames' => 'таксама вядомы як',
        'plays_with' => 'Гуляе з :devices',

        'comments_count' => [
            '_' => 'Апублікавана :link',
            'count' => ':count_delimited каментарый|:count_delimited каментарыі',
        ],
        'cover' => [
            'to_0' => 'Схаваць вокладку',
            'to_1' => 'Паказаць вокладку',
        ],
        'daily_challenge' => [
            'daily' => '',
            'daily_streak_best' => '',
            'daily_streak_current' => '',
            'playcount' => '',
            'title' => '',
            'top_10p_placements' => '',
            'top_50p_placements' => '',
            'weekly' => '',
            'weekly_streak_best' => '',
            'weekly_streak_current' => '',

            'unit' => [
                'day' => '',
                'week' => '',
            ],
        ],
        'edit' => [
            'cover' => [
                'button' => 'Змяніць фон профілю',
                'defaults_info' => 'Больш параметраў фону будуць доступны ў будучыні',
                'holdover_remove_confirm' => "",
                'title' => '',

                'upload' => [
                    'broken_file' => 'Не атрымалася апрацаваць выяву. Паспрабуйце яшчэ раз.',
                    'button' => 'Запампаваць выяву',
                    'dropzone' => 'Перацягніце сюды, каб запампаваць',
                    'dropzone_info' => 'Вы таксама можаце перацягнуць сюды, каб запампаваць',
                    'size_info' => 'Памер фону павінен быць 2400x620',
                    'too_large' => 'Запампаваны файл надта вялікі.',
                    'unsupported_format' => 'Фармат не падтрымліваецца.',

                    'restriction_info' => [
                        '_' => 'Запампоўка даступна толькі для :link',
                        'link' => 'osu!supporters',
                    ],
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => 'прадвызначаны рэжым гульні',
                'set' => 'усталяваць :mode як прадвызначаны рэжым гульні',
            ],

            'hue' => [
                'reset_no_supporter' => '',
                'title' => '',

                'supporter' => [
                    '_' => '',
                    'link' => '',
                ],
            ],
        ],

        'extra' => [
            'none' => 'няма',
            'unranked' => 'Няма нядаўніх гульняў',

            'achievements' => [
                'achieved-on' => 'Атрымана :date',
                'locked' => 'Заблакавана',
                'title' => 'Дасягненні',
            ],
            'beatmaps' => [
                'by_artist' => 'ад :artist',
                'title' => 'Бітмапы',

                'favourite' => [
                    'title' => 'Абраныя бітмапы',
                ],
                'graveyard' => [
                    'title' => 'Закінутыя бітмапы',
                ],
                'guest' => [
                    'title' => 'Гасцявыя ўдзелы ў картах',
                ],
                'loved' => [
                    'title' => 'Любімыя бітмапы',
                ],
                'nominated' => [
                    'title' => 'Намінаваныя рэйтынгавыя',
                ],
                'pending' => [
                    'title' => 'Чаканыя бітмапы',
                ],
                'ranked' => [
                    'title' => 'Ранкаваныя бітмапы',
                ],
            ],
            'discussions' => [
                'title' => 'Дыскусіі',
                'title_longer' => 'Нядаўнія дыскусіі',
                'show_more' => 'убачыць больш дыскусій',
            ],
            'events' => [
                'title' => 'Мерапрыемствы',
                'title_longer' => 'Апошнія мерапрыемствы',
                'show_more' => 'убачыць больш мерапрыемств',
            ],
            'historical' => [
                'title' => 'Храналогія',

                'monthly_playcounts' => [
                    'title' => 'Гульнявая гісторыя',
                    'count_label' => 'Гульняў',
                ],
                'most_played' => [
                    'count' => 'згуляна раз',
                    'title' => 'Найбольш згуляныя бітмапы',
                ],
                'recent_plays' => [
                    'accuracy' => 'дакладнасць: :percentage',
                    'title' => 'Нядаўнія гальні (24гадз)',
                ],
                'replays_watched_counts' => [
                    'title' => 'Гісторыя праглядаў паўтораў',
                    'count_label' => 'Паўтораў прагледжана',
                ],
            ],
            'kudosu' => [
                'recent_entries' => 'Нядаўняя гісторыя кудосу',
                'title' => 'Кудосу!',
                'total' => 'Агулам зароблена кудосу',

                'entry' => [
                    'amount' => ':amount кудосу',
                    'empty' => "Гэты карыстальнік наогул не атрымліваў кудосу!",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => 'Атрымана :amount за адказ у :post',
                        ],

                        'deny_kudosu' => [
                            'reset' => 'Пазбаўлена :amount за адказ у :post',
                        ],

                        'delete' => [
                            'reset' => 'Страчана :amount за выдаленне адказа ў допісе :post',
                        ],

                        'restore' => [
                            'give' => 'Атрымана :amount за аднаўленне адказа ў допісе :post',
                        ],

                        'vote' => [
                            'give' => 'Атрымана :amount за атрыманне галасоў у допісе :post',
                            'reset' => 'Страчана :amount за страчэнне галасоў у допісе :post',
                        ],

                        'recalculate' => [
                            'give' => 'Атрымана :amount за пералік галасоў у допісе :post',
                            'reset' => 'Страчана :amount за пералік галасоў у допісе :post',
                        ],
                    ],

                    'forum_post' => [
                        'give' => ':giver даў :amount за адказ у допісе :post',
                        'reset' => ':giver скінуў кудосу за адказ у допісе :post',
                        'revoke' => ':giver забраў кудосу за адказ у допісе :post',
                    ],
                ],

                'total_info' => [
                    '_' => 'Залежыць ад таго, колькі укладу карыстальнік унёс у мадэрацыю бітмапы. Глядзіце :link, каб даведацца больш.',
                    'link' => 'гэту старонку',
                ],
            ],
            'me' => [
                'title' => 'пра мяне!',
            ],
            'medals' => [
                'empty' => "Гэты карыстальнік яшчэ нічога не атрымаў. ;_;",
                'recent' => 'Апошнія',
                'title' => 'Медалі',
            ],
            'playlists' => [
                'title' => 'Плэйлістовыя гульні',
            ],
            'posts' => [
                'title' => 'Паведамленні',
                'title_longer' => 'Апошнія паведамленні',
                'show_more' => 'убачыць больш паведамленняў',
            ],
            'recent_activity' => [
                'title' => 'Нядаўняя актыўнасць',
            ],
            'realtime' => [
                'title' => 'Мультыплэерныя гульні',
            ],
            'top_ranks' => [
                'download_replay' => 'Спампаваць паўтор',
                'not_ranked' => 'PP даюцца толькі на рэйтынгавых картах.',
                'pp_weight' => 'узважана :percentage',
                'view_details' => 'Паглядзець падрабязнасці',
                'title' => 'Рэйтынгі',

                'best' => [
                    'title' => 'Найлепшая прадукцыйнасць',
                ],
                'first' => [
                    'title' => 'Першыя месцы ў рэйтынгу',
                ],
                'pin' => [
                    'to_0' => 'Адмацаваць',
                    'to_0_done' => 'Адмацаваны вынік',
                    'to_1' => 'Замацаваць',
                    'to_1_done' => 'Замацаваны вынік',
                ],
                'pinned' => [
                    'title' => 'Замацаваныя Вынікі',
                ],
            ],
            'votes' => [
                'given' => 'Галасоў дадзена (за апошнія 3 месяцы)',
                'received' => 'Атрымана галасоў (за апошнія 3 месяцы)',
                'title' => 'Галасы',
                'title_longer' => 'Апошнія галасаванні',
                'vote_count' => ':count_delimited голас|:count_delimited галасоў',
            ],
            'account_standing' => [
                'title' => 'Стан акаўнту',
                'bad_standing' => "Акаўнт :username не ў найлепшым стане :(",
                'remaining_silence' => 'карыстальнік :username зможа зноў гаварыць праз :duration.',

                'recent_infringements' => [
                    'title' => 'Нядаўнія парушэнні',
                    'date' => 'дата',
                    'action' => 'дзея',
                    'length' => 'працягласць',
                    'length_indefinite' => 'Бестэрміновы',
                    'description' => 'апісанне',
                    'actor' => ':username',

                    'actions' => [
                        'restriction' => 'Заблакіраваць',
                        'silence' => 'Заглушаны',
                        'tournament_ban' => 'Забарона на ўдзел у турнірах',
                        'note' => 'Нататка',
                    ],
                ],
            ],
        ],

        'info' => [
            'discord' => '',
            'interests' => 'Цікаўнасці',
            'location' => 'Бягучае месцазнаходжанне',
            'occupation' => 'Занятак',
            'twitter' => '',
            'website' => 'Вэб-сайт',
        ],
        'not_found' => [
            'reason_1' => 'Вы маглі змяніць сваё імя карыстальніка.',
            'reason_2' => 'Акаўнт можа быць часова недаступны з-за скарг або праблем бяспечнасці.',
            'reason_3' => 'Магчыма, вы памыліліся!',
            'reason_header' => 'Ёсць некалькі магчымых прычын:',
            'title' => 'Карыстальнік не знойдзены! ;_;',
        ],
        'page' => [
            'button' => 'Рэдагаваць профіль',
            'description' => '<strong>пра мяне!</strong> гэта ваша ўласнае месца ў профілю, якое можна дастасаваць.',
            'edit_big' => 'Рэдагаваць мяне!',
            'placeholder' => 'Напішыце змесціва старонкі тут',

            'restriction_info' => [
                '_' => 'Каб разблакаваць гэту функцыю патрэбны: :link.',
                'link' => 'osu!supporter',
            ],
        ],
        'post_count' => [
            '_' => 'Размясціў :link',
            'count' => ':count допіс|:count допісы|:count допісаў',
        ],
        'rank' => [
            'country' => 'Рэйтынг краін для :mode',
            'country_simple' => 'Рэйтынг па краіне',
            'global' => 'Глабальны рэйтынг для :mode',
            'global_simple' => 'Глабальны рэйтынг',
            'highest' => 'Найвышэйшы ранг: :rank, :date',
        ],
        'stats' => [
            'hit_accuracy' => 'Дакладнасць трапленняў',
            'level' => 'Узровень :level',
            'level_progress' => 'Прагрэс да новага ўзроўню',
            'maximum_combo' => 'Максімальнае комба',
            'medals' => 'Медалі',
            'play_count' => 'Колькасць гульняў',
            'play_time' => 'Агульны час гульні',
            'ranked_score' => 'Рэйтынгавыя ачкі',
            'replays_watched_by_others' => 'Праглядаў паўтораў іншымі',
            'score_ranks' => 'Рэйтынг па ачках',
            'total_hits' => 'Усяго патрапленняў',
            'total_score' => 'Усяго ачкоў',
            // modding stats
            'graveyard_beatmapset_count' => 'Закінутыя бітмапы',
            'loved_beatmapset_count' => 'Любімыя бітмапы',
            'pending_beatmapset_count' => 'Бітмапы у чаканні',
            'ranked_beatmapset_count' => 'Ранкаваныя бітмапы',
        ],
    ],

    'silenced_banner' => [
        'title' => 'Вы ў цяперашні час заглушаныя.',
        'message' => 'Некаторыя дзеянні могуць быць недаступныя.',
    ],

    'status' => [
        'all' => 'Усе',
        'online' => 'У сетцы',
        'offline' => 'Не ў сетцы',
    ],
    'store' => [
        'from_client' => 'калі ласка, зарэгіструйцеся праз гульнявой кліент!',
        'from_web' => 'калі ласка, завершыце рэгістрацыю праз сайт osu!',
        'saved' => 'Карыстальнік створаны',
    ],
    'verify' => [
        'title' => 'Верыфікацыя Акаўнту',
    ],

    'view_mode' => [
        'brick' => 'Паказваць цаглінкамі',
        'card' => 'Картачны выгляд',
        'list' => 'У выглядзе спіса',
    ],
];
