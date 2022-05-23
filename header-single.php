<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- récupération de l'url de la stylesheet, récupère le lien directement-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title>Index</title>
    <?php wp_head(); ?>
</head>

<body>

    <!-- récupération de l'image mise en avant (ajouter dans functions.php le nécessaire) -->
    <header class="single-header">

        <div class="container ">
            <!-- navbar -->
            <nav>
                <!-- récupération du logo du site via une fonction qui récupère le DOSSIER de notre thème-->
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-couteau-basque-blanc-OFFICIEL.png" alt="" class="nav-logo"></a>

                <?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?>
                <div class="rs">
                    <p>&#9429;</p>
                </div>
            </nav>


        </div>


    </header>