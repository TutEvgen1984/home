<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.10" ?>
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
    // 1.10 Округление чисел

    // is_numeric — Проверяет, содержит ли переменная число или числовую строку
    // https://www.php.net/manual/ru/function.is-numeric.php

    $tests = array(
        "42",
        1337,
        0x539,
        02471,
        0b10100111001,
        1337e0,
        "0x539",
        "02471",
        "0b10100111001",
        "1337e0",
        "not numeric",
        array(),
        9.1,
        null,
        '',
    );

    foreach ($tests as $element) {
        if (is_numeric($element)) {
            echo var_export($element, true) . " — число", PHP_EOL . "<br>";
        } else {
            echo var_export($element, true) . " — НЕ число", PHP_EOL . "<br>";
        }
    }
    // Универсальный перенос в php при помощи константы PHP_EOL, который подходит для всех операционных систем. (Почему-то не работает)
    // https://www.php.net/manual/ru/function.var-export.php
    // var_export — Выводит или возвращает удобное для разбора строковое представление переменной
    // return со значением true функция var_export() вернёт представление переменной, а не выведет.

    // Округление round
    // https://www.php.net/manual/ru/function.round.php
    echo round(21.38744654) . "<br>";
    // 21

    echo round(21.38744654, 2) . "<br>";
    // 21.39
    // это округление до 2-х символов после запятой

    // ceil — Округляет дробное число в бо́льшую сторону
    // ceil (от англ. «ceiling» — «потолок»)
    // https://www.php.net/manual/ru/function.ceil.php
    echo ceil(4.3), "<br>";    // 5
    echo ceil(9.999), "<br>";  // 10
    echo ceil(-3.14), "<br>";  // -3

    // floor — Округляет дробное число в меньшую сторону
    // https://www.php.net/manual/ru/function.floor.php
    echo floor(4.3), "<br>";   // 4
    echo floor(9.999), "<br>"; // 9
    echo floor(-3.14), "<br>"; // -4

    ?>

</body>

</html>