<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 2.4" ?>
    </title>
    <style>
        body {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>

    <?php
    // https://www.php.net/manual/ru/function.define.php
    // define — Определяет именованную константу
    // define("NUMBER", 1, true);
    define("NUMBER1", 1);
    // название  константы пишется с полностью большими буквами - это для того чтобы отличать их от обычных переменных
    // true =  не чувствительно к регистру ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
    echo NUMBER1 . "<br>"; // 1
    // причём пишется она без $ впереди

    if (define("NUMBER2", 2)) {
        echo " константа NUMBER2 успешно создана и имеет значение 2";
    }

    if (define("NUMBER2", 4)) {
        echo " константа NUMBER2 успешно создана и имеет значение 4";
    }
    // Warning: Constant NUMBER2 already defined in D:\Develop\OSPanel\home\phpLessons\lesson2.4\public\index.php on line 34

    if (!define("NUMBER2", 4)) {
        echo "1) Константа уже создана <br>";
    }
    // Warning: Constant NUMBER2 already defined in D:\Develop\OSPanel\home\phpLessons\lesson2.4\public\index.php on line 39
    // 1) Константа уже создана

    //  функция defined() - defined — Проверяет, существует ли константа с заданным именем
    // https://www.php.net/manual/ru/function.defined.php
    if (defined("NUMBER2")) {
        echo "2) Константа уже создана <br>";
    }
    // 2) Константа уже создана

    // constant — Возвращает значение константы
    // https://www.php.net/manual/ru/function.constant.php
    echo constant("NUMBER2") . "<br>"; // 2

    $num = mt_rand(1, 10); // генерируем случайное число
    $name = "VALUE($num)"; // создаем номер константы с учетом случайного числа, например VALUE(5)
    echo "константа называется: $name . <br>";
    define($name, $num); // создаем константу VALUE(5) со значением 5
    echo constant($name) . "<br>"; // 9
    // хотя мы тут могли вывести так:
    echo $num . "<br>";
    // но это прокатывает только потому что я сейчас знаю что в константу присваивал, а если она присваивается неизвестно откуда, то тогда так не получится

    // Предопределённые константы ¶
    // https://www.php.net/manual/ru/language.constants.predefined.php
    // https://www.php.net/manual/ru/reserved.constants.php
    // Магические константы
    // https://www.php.net/manual/ru/language.constants.magic.php
    echo 'Имя файла ' . __FILE__ . '<br>';
    // Имя файла D:\Develop\OSPanel\home\phpLessons\lesson2.4\public\index.php
    echo 'Строка ' . __LINE__ . '<br>';
    // Строка 69

    // Текущая версия PHP
    echo PHP_VERSION . '<br>';
    // 8.4.13

    // Операционная система, под которую собирался PHP
    echo PHP_OS . '<br>';
    // WINNT

    // Корректный символ конца строки, используемый на данной платформе
    echo "Строка" . PHP_EOL . '<br>';
    // Так я и не понял что это такое

    // Текущий номер строки в файле
    echo __LINE__ . '<br>';
    // 88

    // Полный путь и имя текущего файла
    echo __FILE__ . '<br>';
    // D:\Develop\OSPanel\home\phpLessons\lesson2.4\public\index.php

    // Директория файла
    echo __DIR__ . '<br>';
    // D:\Develop\OSPanel\home\phpLessons\lesson2.4\public

    ?>

</body>

</html>