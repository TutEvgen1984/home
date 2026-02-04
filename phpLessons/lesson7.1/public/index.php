<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 7.1" ?>
    </title>
    <style>
        body {
            color: white;
            background-color: black;
            font-size: 36px;
        }
    </style>
</head>

<body>

    <?php
    // 7.1 Передача параметров методом GET (в строке браузера после знака ?)

    // суперглобальный массив $_GET

    // https://phpless7dot1/?id=79854
    // id это ключ
    // 79854 это значение

    echo $_GET['id'];
    // 79854
    echo "<br>";

    // & (амперсанд) знак после которого можно еще ключ задать

    // https://phpless7dot1/?id=79854&name=Ivan&theme=dark


    print_r($_GET);
    //Array ( [id] => 79854 [name] => Ivan [theme] => dark )
    echo "<br>";


    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    // Array
    // (
    //     [id] => 79854
    //     [name] => Ivan
    //     [theme] => dark
    // )

    // https://phpless7dot1/?id[]=79854&id[]=4213&name=Ivan&theme=dark
    // Array
    // (
    //     [id] => Array
    //         (
    //             [0] => 79854
    //             [1] => 4213
    //         )

    //     [name] => Ivan
    //     [theme] => dark
    // )

    // произвольные строковые индексы
    // https://phpless7dot1/?id[a]=79854&id[b]=4213&name=Ivan&theme=dark
    // Array
    // (
    //     [id] => Array
    //         (
    //             [a] => 79854
    //             [b] => 4213
    //         )

    //     [name] => Ivan
    //     [theme] => dark
    // )

    // произвольные числовые индексы
    // https://phpless7dot1/?id[3]=79854&id[4]=4213&name=Ivan&theme=dark
    // Array
    // (
    //     [id] => Array
    //         (
    //             [3] => 79854
    //             [4] => 4213
    //         )

    //     [name] => Ivan
    //     [theme] => dark
    // )

    // urlencode — Кодирует строку для безопасного включения в структуру URL-адреса
    // https://www.php.net/manual/ru/function.urlencode.php

    echo "<a href='test.php?phrase=" . urlencode("Привет, мир!") . "'>Ссылка</a>";
    // 404
    // Не найдено
    // Запрашиваемый ресурс не найден на этом сервере. Он мог быть перемещен, удалён, или URL может быть неверным.

    // https://phpless7dot1/test.php?phrase=Привет%2C+мир%21
    // Функция urlencode() в PHP заменяет символ запятой (,) на %2C
    // Это происходит по алгоритму URL-кодирования: все символы, кроме латинских букв, -, _, . заменяются знаком процента (%), за которым идут два шестнадцатеричных числа, а пробелы — на знак сложения (+)

    // **********************
    // parse_url — Разбирает URL-адрес и возвращает компоненты адреса
    // https://www.php.net/manual/ru/function.parse-url.php

    $url = 'http://user:pass@www.site.ru/path/index.php?par=value#anch';
    echo "<pre>";
    print_r(parse_url($url));
    echo "</pre>";
    // получим ассоциативный массив с ключами
    // Array
    // (
    //     [scheme] => http
    //     [host] => www.site.ru
    //     [user] => user
    //     [pass] => pass
    //     [path] => /path/index.php
    //     [query] => par=value
    //     [fragment] => anch
    // )

    // получить только протокол
    echo "<pre>";
    print_r(parse_url($url, PHP_URL_SCHEME));
    echo "</pre>";
    // http

    // получить только запрос (все, что после вопросительного знака)
    echo "<pre>";
    print_r(parse_url($url, PHP_URL_QUERY));
    echo "</pre>";
    // par=value

    // получить только пользователя
    echo "<pre>";
    print_r(parse_url($url, PHP_URL_USER));
    echo "</pre>";
    // par=value

    // urldecode — Декодирует строку, закодированную для безопасного включения в структуру URL-адреса
    // https://www.php.net/manual/ru/function.urldecode.php


    ?>

</body>

</html>