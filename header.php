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
            <h1 class="mb-2 font-weight-bold text-uppercase">
                GP-ODS-APOLLO
            </h1>
            <?php // TODO: get site logo image url ?>
            <img
                class="rounded-circle w-50"
                src="<?php echo get_stylesheet_directory_uri() . '/static/images/logo.jpg' ?>"
                alt="Brand logo image" />
        </div>
    </header>
    <div id="ttr_header" class="jumbotron">
        <h1>HEADER</h1>
    </div>
    <div class="container">