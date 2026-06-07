<?php

return [
    '1' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid-fill',
            'route' => 'admin.dashboard',
            'active' => 'admin.dashboard',
        ],
        [
            'title' => 'Management User',
            'icon' => 'bi bi-people-fill',
            'route' => 'admin.management.user',
            'active' => 'admin.management*',
        ],
        [
            'title' => 'Manajemen Kursus',
            'icon' => 'bi bi-book-fill',
            'active' => 'admin.manajemen-kursus*',
            'submenu' => [
                [
                    'title' => 'Kelola Kursus',
                    'url' => '/admin/manajemen-kursus/kursus',
                    'active' => 'admin.manajemen-kursus.kursus*',
                ],
                [
                    'title' => 'Kelola Materi',
                    'url' => '/admin/manajemen-kursus/materi',
                    'active' => 'admin.manajemen-kursus.materi*',
                ],
            ]
        ]
    ],

    '2' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid-fill',
            'route' => 'mentor.dashboard',
            'active' => 'mentor.dashboard',
        ],
        [
            'title' => 'Pendaftar',
            'icon' => 'bi bi-people-fill',
            'route' => 'mentor.pendaftar',
            'active' => 'mentor.pendaftar',
        ],
        [
            'title' => 'Manajemen Kursus',
            'icon' => 'bi bi-book-fill',
            'active' => 'mentor.manajemen-kursus*',
            'submenu' => [
                [
                    'title' => 'Kelola Kursus',
                    'url' => '/mentor/manajemen-kursus/kursus',
                    'active' => 'mentor.manajemen-kursus.kursus*',
                ],
                [
                    'title' => 'Kelola Materi',
                    'url' => '/mentor/manajemen-kursus/materi',
                    'active' => 'mentor.manajemen-kursus.materi*',
                ],
            ],
        ],
        [
            'title' => 'Manajemen Quiz',
            'icon' => 'bi bi-card-checklist',
            'route' => 'mentor.quiz',
            'active' => 'mentor.quiz*',
        ],
    ],

    '3' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid-fill',
            'route' => 'user.dashboard',
            'active' => 'user.dashboard',
        ],
        [
            'title' => 'Pembelajaran',
            'icon' => 'bi bi-book-half',
            'route' => 'user.pembelajaran',
            'active' => 'user.pembelajaran*',
        ],
    ],
];