<html>

<head>
    <title>Tutorial theme</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() . '/assets/app.js'; ?>" defer></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/main.css'; ?>">
</head>

<body>
    <header class="d-flex justify-content-center align-items-center">
        <?php // TODO: get site name ?>
        <div class="text-center">
            <h1 class="mb-2 font-weight-bold text-uppercase"
            style="text-shadow: <?php
            // TODO: add border with Sass
            $border = 1;
            for ($x = $border * -1; $x <= $border ; $x++) {
                for ($y = $border * -1; $y <= $border ; $y++) {
                    echo $x . "px " . $y . "px .0625em " . "var(--white)";
                    echo $x == $y && $x == $border ? ";" : ", ";
                }
            }
            ?>">
                GP-ODS-APOLLO
            </h1>
            <?php // TODO: get site logo image url ?>
            <img
                class="rounded-circle w-50"
                src="<?php echo get_stylesheet_directory_uri() . '/static/images/logo.jpg' ?>"
                alt="Brand logo image" />
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
        <a href="#" class="navbar-brand d-md-none">
            <?php // TODO: get site name ?>
            GP-ODS-APOLLO
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav">
                <?php // TODO: add links dynamically and localized ?>
                <li class="nav-item active">
                    <a href="#" class="nav-link">
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Vídeos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Autoevaluación
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Recursos
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLanguagesDropdown" data-toggle="dropdown">
                        ES
                        <span class="oma oma-globe-with-meridians"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a class="dropdown-item active" href="#">
                                <span class="oma oma-flag-spain"></span>
                                Español
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="oma oma-flag-united-kingdom"></span>
                                English
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div id="ttr_header" class="jumbotron">
        <h1>HEADER</h1>
    </div>
    <div class="container">