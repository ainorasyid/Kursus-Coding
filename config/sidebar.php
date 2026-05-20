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
            'title' => 'Management',
            'icon' => 'bi bi-people-fill',
            'active' => 'admin.management.*',
            'submenu' => [
                [
                    'title' => 'Kelola User',
                    'url' => '#',
                    'active' => 'admin.management.users',
                ],
                [
                    'title' => 'Kelola Mentor',
                    'url' => '#',
                    'active' => 'admin.management.mentors',
                ],
            ],
        ],
    ],

    '2' => [
        [
            'title' => 'Dashboard',
            'icon' => 'bi bi-grid-fill',
            'route' => 'mentor.dashboard',
            'active' => 'mentor.dashboard',
        ],
        [
            'title' => 'Materi',
            'icon' => 'bi bi-book-fill',
            'active' => 'mentor.material.*',
            'submenu' => [
                [
                    'title' => 'Kelola Materi',
                    'url' => '#',
                    'active' => 'mentor.material.index',
                ],
            ],
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
            'active' => 'user.learning.*',
            'submenu' => [
                [
                    'title' => 'HTML',
                    'url' => '/user/pembelajaran/html',
                    'active' => 'user.learning.html',
                ],
                [
                    'title' => 'CSS',
                    'url' => '/user/pembelajaran/css',
                    'active' => 'user.learning.css',
                ],
                [
                    'title' => 'Javascript',
                    'url' => '/user/pembelajaran/javascript',
                    'active' => 'user.learning.javascript',
                ],
                [
                    'title' => 'PHP',
                    'url' => '/user/pembelajaran/php',
                    'active' => 'user.learning.php',
                ],
                [
                    'title' => 'cpp',
                    'url' => '/user/pembelajaran/cpp',
                    'active' => 'user.learning.cpp',
                ],
            ],
        ],
    ],
];