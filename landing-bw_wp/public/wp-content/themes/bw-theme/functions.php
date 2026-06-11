<?php
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

// добавить поддержку выбора логотипа сайта
add_theme_support('custom-logo');

function add_scripts_and_styles()
{
    // подключение своего jquery взамен встроенного в wp
    wp_deregister_script('jquery');
    wp_register_script('new-jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, null, true);
    wp_enqueue_script('new-jquery');
    // на странице появилась:
    // <script id="new-jquery-js" src="https://landingbwwp/wp-content/themes/bw-theme/assets/js/jquery-3.5.1.min.js"></script>

    // подключение js swiper
    wp_enqueue_script('swiper-script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('new-jquery'), null, true);
    // на странице появилась:
    // <script id="swiper-script-js" src="https://landingbwwp/wp-content/themes/bw-theme/assets/js/swiper-bundle.min.js"></script>

    // подключение своего main.js после jquery и swiper-script
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('new-jquery', 'swiper-script'), null, true);
    // на странице появилась:
    // <script id="main-js" src="https://landingbwwp/wp-content/themes/bw-theme/assets/js/main.js"></script>

    wp_enqueue_style('fontello-style', get_template_directory_uri() . '/assets/css/fontello.css');
    // на странице появилась:
    // <link rel="stylesheet" id="fontello-css" href="https://landingbwwp/wp-content/themes/bw-theme/assets/css/fontello.css?ver=7.0" media="all">

    // подключение css swiper
    wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');

    // подключение style.css
    // wp_enqueue_style('main', get_stylesheet_uri(), array('fontello'));
    wp_enqueue_style('main', get_stylesheet_uri(), array('fontello-style', 'swiper-style'));
    // с условием подключения после fontello.css и swiper-bundle.min.js
    // на странице появилась:
    // <link rel="stylesheet" id="main-css" href="https://landingbwwp/wp-content/themes/bw-theme/style.css?ver=7.0" media="all">
}
