<?php
// подцепляемся к событию wp_enqueue_scripts (выполнение скриптов и стилей вордпрессом) и выполняем нашу функцию add_scripts_and_styles()
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

function add_scripts_and_styles()
{
    // Подключаем style.css который лежит в корне темы
    wp_enqueue_style('style', get_stylesheet_uri());
}
