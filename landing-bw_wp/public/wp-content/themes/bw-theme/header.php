<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- старый способ подключения скриптов и шрифтов не работает (их можно удалять), но необходимо подключить wordpress-методом в function.php -->
    <!-- <link rel="stylesheet" href="css/fontello.css"> -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <!-- <title>Document</title> -->
    <!-- Заголовок сайта изменяемый из WP: -->
    <?php wp_title(); ?>

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="menu__desktop">
                <ul class="menu">
                    <li class="menu__item active"><a href="<?php get_home_url(); ?>">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>

                    <!-- вывести логотип в любом месте на сайте -->
                    <li class="menu__item"><a href="#"><?php the_custom_logo(); ?></a></li>

                    <li class="menu__item"><a href="#provide">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <nav class="menu__mobile">
                <div class="menu__inner">
                    <?php the_custom_logo(); ?>
                    <div class="menu__burger"><span>toggle menu</span></div>
                </div>
                <ul class="menu">
                    <li class="menu__item active"><a href="<?php get_home_url(); ?>">Home</a></li>
                    <li class="menu__item"><a href="#about">About Us</a></li>
                    <li class="menu__item"><a href="#team">Team</a></li>
                    <li class="menu__item"><a href="#provide">Services</a></li>
                    <li class="menu__item"><a href="#">Blog</a></li>
                    <li class="menu__item"><a href="#contact">Contact Us</a></li>
                </ul>
            </nav>
            <div class="header__content">
                <h1 class="header__title"><?php CFS()->get('header_title') ?></h1>
                <p class="header__text"><?php CFS()->get('header_slogan') ?></p>
                <a href="#about" class="header__button"><?php CFS()->get('header_button') ?></a>
            </div>
        </div>
    </header>