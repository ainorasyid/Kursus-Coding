<?php

return [
    '1' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid-fill',
            'route' => 'admin.dashboard',
        ],
        [
            'title' => 'Management',
            'icon' => 'bi bi-people-fill',
            'submenu' => [
                [
                    'title' => 'Kelola User',
                    'url' => '#',
                ],
                [
                    'title' => 'Kelola Mentor',
                    'url' => '#',
                ],
            ],
        ],
    ],

    '2' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid-fill',
            'route' => 'mentor.dashboard',
        ],
        [
            'title' => 'Materi',
            'icon' => 'bi bi-book-fill',
            'submenu' => [
                [
                    'title' => 'Kelola Materi',
                    'url' => '#',
                ],
            ],
        ],
    ],

    '3' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid-fill',
            'route' => 'user.dashboard',
        ],
        [
            'title' => 'Pembelajaran',
            'icon' => 'bi bi-play-circle-fill',
            'submenu' => [
                [
                    'title' => 'Video Belajar',
                    'url' => '#',
                ],
                [
                    'title' => 'Progress',
                    'url' => '#',
                ],
            ],
        ],
    ],
];
