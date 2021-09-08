<?php
$administracao = [
    [
        'text' => 'Movimentos',
        'url'  => '/movimentos',
    ],
    [
        'text' => 'Áreas',
        'url'  => '/areas',
    ],
    [
        'text' => 'Tipos de Contas',
        'url'  => '/tipocontas',
    ],
    [
        'text' => 'Contas',
        'url'  => '/contas',
    ],
    [
        'text' => 'Dotações Orçamentárias',
        'url'  => '/dotorcamentarias',
    ],
    [
        'text' => 'Notas',
        'url'  => '/notas',
    ],
    [
        'text' => 'Usuários',
        'url'  => '/usuarios',
    ],
    [
        'text' => 'Contas x Usuários',
        'url'  => '/contausuarios',
    ],
    [
        'text' => 'Unidade',
        'url'  => '/unidades',
    ],
];
return [
    'title'=> env('APP_NAME'),
    'dashboard_url' => config('app.url'),
    'logout_method' => 'POST',
    'logout_url' => '/logout',
    'login_url' => '/login',
    'menu' => [
        [
            'text'    => 'Administração',
            'submenu' => $administracao,
            'can' => 'all',
        ],
        [
            'text' => 'Lançamentos',
            'url'  => '/lancamentos',
            'can' => 'all',
        ],
        [
            'text' => 'Fichas Orçamentárias',
            'url'  => '/ficorcamentarias',
            'can' => 'all',
        ],
    ]
];