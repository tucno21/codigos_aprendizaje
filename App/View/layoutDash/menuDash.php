<?php

// DATOS GENERALES ADMIN
$title = 'Mi Codigo';
$titleShort = 'CV';
$mainLink = route('home.index');
$logoAdmin = '../public/logo/logo.png';

//DATOS DEL USUARIO ADMIN
$userName = 'MI_codigo';



//MENU CERRAR O PERFIL DE ADMINISTRADOR
$menuSession = [
    [
        'text' => 'Logout',
        'url'  => 'nn',
        'icon' => 'bi bi-box-arrow-right',
    ],
];



//CREACION DE ENLACES PARA EL MENU SIDEBAR
$linksSidebar = [
    [
        'mode' => 'menu',
        'text' => 'Lenaguajes',
        'url'  => route('lenguajes.index'),
        'icon' => 'bi bi-journal-code',
    ],
    [
        'mode' => 'menu',
        'text' => 'Codigos',
        'url'  => route('codigos.index'),
        'icon' => 'bi bi-file-code',
    ],
];



//ENLACES PARA CSS Y JS html
$linkURL = base_url;

$linksCss = [
    $linkURL . '/assets/css/style.css',
    $linkURL . '/assets/css/customizer.css',
    $linkURL . '/assets/css/icon/bootstrap-icons.css',
];

$linksScript = [
    $linkURL . '/assets/js/popper.min.js',
    $linkURL . '/assets/js/perfect-scrollbar.min.js',
    $linkURL . '/assets/js/bootstrap.min.js',
    $linkURL . '/assets/js/feather.min.js',
    $linkURL . '/assets/js/pcoded.js',
    $linkURL . '/assets/plugins/sweetalert2/sweetalert2.js',
    $linkURL . '/assets/plugins/ckeditor/ckeditor.js',
];
