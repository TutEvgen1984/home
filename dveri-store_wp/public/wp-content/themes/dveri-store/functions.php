<?php
// подцепляемся к событию wp_enqueue_scripts (выполнение скриптов и стилей вордпрессом) и выполняем нашу функцию add_scripts_and_styles()
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

function add_scripts_and_styles()
{
    // Подключаем style.css который лежит в корне темы
    wp_enqueue_style('style', get_stylesheet_uri());
}

// разблокировка возможности выбора своего собственного логотипа в вордпрессе
// https://wp-kama.ru/function/add_theme_support
add_action('after_setup_theme', 'add_features');

function add_features()
{
    add_theme_support('custom-logo', array(
        'height' => 50,
        'width'  => 100,
    ));
}
// внешний вид => настроить => свойства сайта => выбрать логотип
