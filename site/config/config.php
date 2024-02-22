<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen.
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => $_SERVER['SERVER_NAME'] === 'localhost',
    'cache' => [
        'pages' => [
            'active' => $_SERVER['SERVER_NAME'] !== 'localhost',
        ]
    ],
    'routes' => [
        [
            'pattern' => 'feed',
            'method' => 'GET',
            'action'  => function () {
                $options = [
                    'title'       => 'Aktuelle Notizen',
                    'description' => 'Aktuelle Notizen von djdn.de',
                    'link'        => 'notes'
                ];
                $feed = page('notes')->children()->listed()->flip()->limit(25)->feed($options);
                return $feed;
            }
        ],
    ],
];
