<?php
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

// добавить поддержку выбора логотипа сайта
add_theme_support('custom-logo');

function add_scripts_and_styles()
{
    // подключение своего jquery взамен встроенного в wp
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', false, null, true);
    wp_enqueue_script('jquery');

    // подключение своего main.js после jquery
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, 'footer');

    wp_enqueue_style('fontello', get_template_directory_uri() . '/assets/css/fontello.css');
    // на странице появилась:
    // <link rel="stylesheet" id="fontello-css" href="https://landingbwwp/wp-content/themes/bw-theme/assets/css/fontello.css?ver=7.0" media="all">

    // подключение style.css
    wp_enqueue_style('main', get_stylesheet_uri(), array('fontello'));
    // с условием подключения после fontello.css
    // на странице появилась:
    // <link rel="stylesheet" id="main-css" href="https://landingbwwp/wp-content/themes/bw-theme/style.css?ver=7.0" media="all">

}
?>