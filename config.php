<?php

return [
    'production' => false,
    'baseUrl' => '',
    'collections' => [
        'work' => [
            'path' => 'work/{filename}',
            'extends' => '_layouts.work',
            'section' => 'work-content'
        ]
    ],
];
