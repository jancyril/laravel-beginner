<?php

return [
    'siteTitle' => 'Laravel Beginner',
    'siteDescription' => 'Start your Laravel journey here',
    'baseUrl' => 'http://localhost',
    'production' => false,
    'collections' => [
        'posts' => [
            'title' => '',
            'excerpt' => '',
            'date' => '',
            'keywords' => '',
            'sort' => '-date',
            'path' => '{collection}/{slug}'
        ],
    ],
    'headerTitle' => function ($page, $title = '') {
        return ucwords($title);
    },
    'headerText' => function ($page, $text = '') {
        return ucwords($text);
    },
    'trackingId' => ''
];
