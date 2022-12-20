<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Carlos Tucno vasquez">
    <title><?= isset($title) ? $title : 'Mini Framework' ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url . '/assets/css/icon/bootstrap-icons.css' ?>" rel="stylesheet">
    <link href="<?= base_url . '/assets/css/styles/atom-one-dark.min.css' ?>" rel="stylesheet">
    <script src="<?= base_url . '/assets/js/highlight.min.js' ?>"></script>
    <style>
        body {
            /* min-height: 75rem; */
            padding-top: 4.5rem;
        }

        .form-signin {
            max-width: 400px;
            padding: 15px;
        }

        .form-product {
            max-width: 800px;
            padding: 15px;
        }

        #copy-button {
            position: absolute;
            top: 25px;
            right: 15px;
            padding: 5px;
            background-color: #28B463;
            border: none;
            outline: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.2s ease-in;
            opacity: 0;
        }

        #copy-button:hover {
            background-color: #28B46390;
        }

        .code-wrapper:hover #copy-button {
            opacity: 1;
        }

        #copy-success {
            position: absolute;
            top: 25px;
            /* bottom: 12px; */
            left: 50%;
            transform: translateX(-50%);
            background-color: #28B463;
            color: white;
            padding: 8px 20px;
            font-size: 18px;
            border-radius: 5px;
            display: none;
        }

        #copy-success.show-message {
            display: inline-block;
        }
    </style>
</head>

<body>
    <main>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" aria-label="Fourth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand me-5" href="<?= route('home.index') ?>">Mis Aprendizajes</a>
                <button class="navbar-toggler fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- <div class=""> -->
                <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                    <!-- <ul class="navbar-nav me-auto mb-2 mb-md-0"> -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lenguajes
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="<?= route('lenguajes.comparar') ?>">Comparando</a></li>
                                <li><a class="dropdown-item" href="<?= route('lenguajes.php') ?>">PHP</a></li>
                                <li><a class="dropdown-item" href="<?= route('lenguajes.js') ?>">Javascript</a></li>
                                <li><a class="dropdown-item" href="<?= route('lenguajes.laravel') ?>">Laravel</a></li>
                                <li><a class="dropdown-item" href="<?= route('lenguajes.css') ?>">CSS</a></li>
                                <li><a class="dropdown-item" href="<?= route('lenguajes.bootstrap') ?>">Bootstrap</a></li>
                                <li><a class="dropdown-item" href="<?= route('lenguajes.git') ?>">Git</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route('codigos.index') ?>">Cargar Codigos</a>
                        </li>
                    </ul>
                </div>
                <!-- </div> -->
            </div>
        </nav>