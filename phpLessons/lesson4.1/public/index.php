<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 4.1" ?>
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
    // 4.1 Массивы
    // https://www.php.net/manual/ru/function.print-r.php

    // 1-й способ создания массива с помощью функции array
    $arr1 = array('Hello', 'world', '!');

    // 2-й способ создания массива с помощью квадратных скобок
    $arr2 = ['Hello', 'world', '!'];

    echo $arr1;
    // массив выводится не правильно
    // Warning: Array to string conversion in D:\Develop\OSPanel\home\phpLessons\lesson4.1\public\index.php on line 25
    // Array
    echo "<br><br>";

    echo $arr2[0]; // Hello

    echo "<br>";

    echo $arr2[1]; // world

    echo "<br>";

    // тег pre сохраняет форматирование
    // функция print_r выводит массив по нормальному в виде структуры
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";
    /*  Array
    (
        [0] => Hello
        [1] => world
        [2] => !
    ) */

    //  самостоятельное указание номеров индексов
    $arr3 = [15 => "Hello", "world", "!"];
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";
    /* Array
    (
       [15] => Hello
       [16] => world
       [17] => !
    ) */

    $arr4 = [15 => "Hello", 5 => "world", 8 => "!"];
    echo "<pre>";
    print_r($arr4);
    echo "</pre>";
    /* Array
    (
       [15] => Hello
       [5] => world
       [8] => !
    ) */

    // если один из индексов не пронумеровать, то его номер автоматически станет на 1 больше чем максимальный индекс
    $arr5 = [15 => "Hello", 5 => "world", "!"];
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";
    /* Array
    (
       [15] => Hello
       [5] => world
       [16] => !
    ) */

    // массив изначальный не создан
    $arr6[10] = "Hello";
    $arr6[1] = "World";
    $arr6[6] = "!";
    // задав несуществующему массиву элементы, он создается автоматически
    echo "<pre>";
    print_r($arr6);
    echo "</pre>";
    /* Array
    (
       [10] => Hello
       [1] => world
       [6] => !
    ) */

    // массив изначальный не создан
    $arr7[] = "Hello";
    $arr7[] = "World";
    $arr7[] = "!";
    // задав несуществующему массиву элементы, он создается автоматически
    echo "<pre>";
    print_r($arr7);
    echo "</pre>";
    /* Array
    (
       [0] => Hello
       [1] => world
       [2] => !
    ) */

    // создание массива с помощью переменной
    $var = "Hello World!";
    $arr8 = (array) $var; // это преобразование переменной в массив
    echo "<pre>";
    print_r($arr8);
    echo "</pre>";
    /* Array
    (
        [0] => Hello World!
    ) */

    ?>

</body>

</html>