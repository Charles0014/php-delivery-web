<?php

return [
    /*
      |--------------------------------------------------------------------------
      | Title
      |--------------------------------------------------------------------------
      |
      | The default title of your admin panel, this goes into the title tag
      | of your page. You can override it per page with the title section.
      | You can optionally also specify a title prefix and/or postfix.
      |
     */

    'title' => 'AcountPayment',
    'title_prefix' => '',
    'title_postfix' => '',
    /*
      |--------------------------------------------------------------------------
      | Logo
      |--------------------------------------------------------------------------
      |
      | This logo is displayed at the upper left corner of your admin panel.
      | You can use basic HTML here if you want. The logo has also a mini
      | variant, used for the mini side bar. Make it 3 letters or so
      |
     */
    'logo' => 'Delivery',
    'logo_mini' => '<i class="fas fa-store" aria-hidden="true"></i>',
    /*
      |--------------------------------------------------------------------------
      | Skin Color
      |--------------------------------------------------------------------------
      |
      | Choose a skin color for your admin panel. The available skin colors:
      | blue, black, purple, yellow, red, and green. Each skin also has a
      | light variant: blue-light, purple-light, purple-light, etc.
      |
     */
    'skin' => 'blue',
    /*
      |--------------------------------------------------------------------------
      | Layout
      |--------------------------------------------------------------------------
      |
      | Choose a layout for your admin panel. The available layout options:
      | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
      | removes the sidebar and places your menu in the top navbar
      |
     */
    'layout' => null,
    /*
      |--------------------------------------------------------------------------
      | Collapse Sidebar
      |--------------------------------------------------------------------------
      |
      | Here we choose and option to be able to start with a collapsed side
      | bar. To adjust your sidebar layout simply set this  either true
      | this is compatible with layouts except top-nav layout option
      |
     */
    'collapse_sidebar' => false,
    /*
      |--------------------------------------------------------------------------
      | URLs
      |--------------------------------------------------------------------------
      |
      | Register here your dashboard, logout, login and register URLs. The
      | logout URL automatically sends a POST request in Laravel 5.3 or higher.
      | You can set the request to a GET or POST with logout_method.
      | Set register_url to null if you don't want a register link.
      |
     */
    'dashboard_url' => 'admin',
    'logout_url' => 'logout',
    'logout_method' => null,
    'login_url' => 'login',
    'register_url' => 'register',
    'menu' => [
        [
            'text' => 'Home',
            'url' => 'admin',
            'icon' => 'fas fa-home',
        ],
        [
            'text' => 'Entregas',
            'url' => 'admin/entregas',
            'icon' => 'fa fa-pizza-slice',
        ],
        [
            'text' => 'Cliente',
            'url' => 'admin/clientes',
            'icon' => 'far fa-user'
        ],
        [
            'text' => 'Entregador',
            'url' => 'admin/entregadores',
            'icon' => 'fas fa-history'
        ],
        [
            'text' => 'Produto',
            'url' => 'admin/produtos',
            'icon' => 'fas fa-boxes'
        ],
        [
            'text' => 'Relatório',
            'icon' => 'fas fa-chart-pie',
            'submenu' => [
                [
                    'text' => 'Produtos',
                    'url' => 'admin/ProdutosRelatorios',
                    'icon' => 'fas fa-shopping-cart'
                ],
                [
                    'text' => 'Clientes',
                    'url' => 'admin/ClientesRelatorios',
                    'icon' => 'fas fa-users'
                ],
                [
                    'text' => 'Entregas',
                    'url' => 'admin/EntregasRelatorios',
                    'icon' => 'fas fa-utensils'
                ],
                [
                    'text' => 'Produto por entrega',
                    'url' => 'admin/produto',
                    'icon' => 'fas fa-chart-pie'
                ]
            ]
        ],
        [
            'text' => 'Perfil',
            'url' => 'perfil',
            'icon' => 'fas fa-users-cog',
        ],
        [
            'text' => 'Sobre',
            'url' => 'admin/ajuda',
            'icon' => 'far fa-question-circle',
        ]
    ],
    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
    ],
    /*
      |--------------------------------------------------------------------------
      | Plugins Initialization
      |--------------------------------------------------------------------------
      |
      | Configure which JavaScript plugins should be included. At this moment,
      | DataTables, Select2, Chartjs and SweetAlert are added out-of-the-box,
      | including the Javascript and CSS files from a CDN via script and link tag.
      | Plugin Name, active status and files array (even empty) are required.
      | Files, when added, need to have type (js or css), asset (true or false) and location (string).
      | When asset is set to true, the location will be output using asset() function.
      |
     */
    'plugins' => [
        [
            'name' => 'Datatables',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css',
                ],
            ],
        ],
        [
            'name' => 'Select2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        [
            'name' => 'Chartjs',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        [
            'name' => 'Sweetalert2',
            'active' => true,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//unpkg.com/sweetalert/dist/sweetalert.min.js',
                ],
            ],
        ],
        [
            'name' => 'Pace',
            'active' => true,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],
];
