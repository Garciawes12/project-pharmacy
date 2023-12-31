<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    | Here you can change the default title of your admin panel.
    |
    */

    'title' => 'FLEA',
    'title_prefix' => '',
    'title_postfix' => '',
    'bottom_title' => 'Tablar',
    'current_version' => 'v2.9',


    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    */

    'logo' => '<b>Tab</b>LAR',
    'logo_img_alt' => 'Admin Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    |
    | Here you can set up an alternative logo to use on your login and register
    | screens. When disabled, the admin panel logo will be used instead.
    |
    */

    'auth_logo' => [
        'enabled' => true,
        'img' => [
            'path' => 'assets/logoflea.jpg',
            'alt' => 'Auth Logo',
            'class' => '',
            'width' => 180,
            'height' => 180,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look at the layout section here:
    |
    */

    'layout_topnav' => true,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => null,
    'layout_light_sidebar' => null,
    'layout_fixed_navbar' => null,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,
    'layout_class' => 'layout-fluid', //layout-fluid, layout-boxed, default is also available

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions, you can look at the auth classes section here:
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions, you can look at the admin panel classes here:
    |
    */

    'classes_body' => '',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions, you can look at the urls section here:
    |
    */

    'use_route_url' => true,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => false,
    'setting_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Display Alert
    |--------------------------------------------------------------------------
    |
    | Display Alert Visibility.
    |
    */
    'display_alert' => false,

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    |
    */

    'menu' => [
        // Navbar items:
        [
            'text' => 'Inicio',
            'icon' => 'ti ti-home',
            'url' => '/home'
        ],
        [
            'text' => 'Inventario',
            'icon' => 'ti ti-building-warehouse',
            'url' => '#',
            'submenu' => [
                [
                    'text' => ' Agregar medicamento',
                    'url' => '/medicamentos/create',
                    'icon' => 'ti ti-article'

                ],
                [
                    'text' => ' Gestionar medicamentos',
                    'url' => '/medicamentos',
                    'icon' => 'ti ti-article'
                ]
            ]
        ],

        [
            'text' => 'Compras',
            'icon' => 'ti ti-shopping-cart',
            'url' => '#',
            'submenu' =>[
                [
                    'text' => 'Proveedores',
                    'url' => '/proveedores',
                    'icon' => 'ti ti-shopping-cart'
                ],
                [
                    'text' => 'Ingresos',
                    'url' => '/ingresos',
                    'icon' => 'ti ti-pencil'
                ]
            ]
        ],
        [
            'text' => 'Ventas',
            'icon' => 'ti ti-report-money',
            'url' => '#',
            'submenu' =>[
                [
                    'text' => 'Clientes',
                    'url' => '#',
                    'icon' => 'ti ti-pencil'
                ]
            ]
        ],
        [
            'text' => 'Reportes',
            'icon' => 'ti ti-file-description',
            'url' => '#',
            'submenu' =>[
                [
                    'text' => 'Reporte exitencias',
                    'url' => '#',
                    'icon' => 'ti ti-plus'
                ],
                [
                    'text' => 'Reporte Salidas',
                    'url' => '#',
                    'icon' => 'ti ti-pencil'
                ]
            ]
        ],
        [
            'text' => 'Ayuda',
            'icon' => 'ti ti-help',
            'url' => '#'
        ],

        // [
        //     'text' => 'Support',
        //     'url' => '#',
        //     'icon' => 'ti ti-help',
        //     'submenu' => [
        //         [
        //             'text' => 'Ticket',
        //             'url' => '#',
        //             'icon' => 'ti ti-article'
        //         ]
        //     ],
        // ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    |
    */

    'filters' => [
        TakiElias\Tablar\Menu\Filters\GateFilter::class,
        TakiElias\Tablar\Menu\Filters\HrefFilter::class,
        TakiElias\Tablar\Menu\Filters\SearchFilter::class,
        TakiElias\Tablar\Menu\Filters\ActiveFilter::class,
        TakiElias\Tablar\Menu\Filters\ClassesFilter::class,
        TakiElias\Tablar\Menu\Filters\LangFilter::class,
        TakiElias\Tablar\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Vite
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Vite support.
    |
    | For detailed instructions you can look the Vite here:
    | https://laravel-vite.dev
    |
    */

    'vite' => true,
];
