<?php
$current_page = getCurrentPage();

$menu_items = [
    'dashboard' =>  [
        'title' => 'Dashboard',
        'icon' => 'fas fa-tachometer-alt',
        'page' => 'dashboard',
        'url' => 'dashboard'
    ],
    'admin-profile' =>  [
        'title' => 'Admin Profile',
        'icon' => 'fas fa-user-shield',
        'page' => 'admin-profile',
        'url' => 'admin-profile'
    ],
    'lead' =>  [
        'title' => 'Volunteers',
        'icon' => 'fas fa-users',
        'page' => 'leads',
        'url' => 'leads'
    ],
    'registrations' =>  [
        'title' => 'Registrations',
        'icon' => 'fas fa-users',
        'page' => 'registrations',
        'url' => 'registrations'
    ],
    'site-settings' =>  [
        'title' => 'Site Settings',
        'icon' => 'fas fa-cog',
        'page' => 'site-settings',
        'url' => 'site-settings'
    ]
];
?>