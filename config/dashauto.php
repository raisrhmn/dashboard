<?php

return [
    'menu' => [
        [
            'text'  => 'PERFORMANCE REPORT',
            'url'   => 'report',
            'icon'  => 'flaticon2-protection',
            'roles' => '',
        ],
        [
            'text'  => 'DATA MANAGEMENT',
            'url'   => 'manage.data',
            'icon'  => 'flaticon-layers',
            'roles' => '',
        ],
        [
            'text'  => 'SETTINGS',
            'icon'  => 'flaticon2-gear',
            'module'  => 'settings',
            'roles' => '',
            'submenu' => [
                [
                    'text' => 'Bank Category',
                    'url'   => 'category.index',
                ],
                [
                    'text' => 'Bank',
                    'url'   => 'banks.index',
                ],
                [
                    'text' => 'User Role',
                    'url'  => 'roles.index',
                ],
                [
                    'text' => 'User',
                    'url'  => 'users.index',
                ],
            ],
        ]
    ]
];
