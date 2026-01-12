<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 4.9" ?>
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
    // 4.9 Задачи
    // https://www.php.net/manual/ru/function.rand.php
    // https://www.php.net/manual/ru/function.count.php
    // https://www.php.net/manual/ru/function.sort.php
    // https://www.php.net/manual/ru/function.file.php

    // Задача №1 - вывести случайное значение из массива
    $array1 = ['red', 'green', 'blue', 'violet', 'gray'];
    echo $array1[rand(0, count($array1) - 1)];
    // gray

    // Задача №2 - создать массив случайной длиной от 5 до 10 элементов, каждый элемент которого тоже случайный целый от 0 до 100, затем отсортировать полученный массив
    $length2 = rand(5, 10);
    for ($i = 0; $i < $length2; $i++) {
        $array2[$i] = rand(0, 100);
    }

    echo '<pre>';
    print_r($array2);
    echo '</pre>';

    // Array
    // (
    //     [0] => 67
    //     [1] => 81
    //     [2] => 20
    //     [3] => 84
    //     [4] => 42
    //     [5] => 28
    //     [6] => 38
    //     [7] => 57
    //     [8] => 67
    // )

    //  отсортировка массив
    sort($array2);

    echo '<pre>';
    print_r($array2);
    echo '</pre>';
    // Array
    // (
    //     [0] => 20
    //     [1] => 28
    //     [2] => 38
    //     [3] => 42
    //     [4] => 57
    //     [5] => 67
    //     [6] => 67
    //     [7] => 81
    //     [8] => 84
    // )

    // Задача №3 - из данных находящихся в файле month.txt создать массив

    $array3 = file('month.txt');
    // каждая строка в файле будет считаться отдельным элементом массива
    echo '<pre>';
    print_r($array3);
    echo '</pre>';

    // Array
    // (
    //     [0] => январь 01

    //     [1] => февраль 02

    //     [2] => март 03

    //     [3] => апрель 04

    //     [4] => май 05

    //     [5] => июнь 06

    //     [6] => июль 07

    //     [7] => август 08

    //     [8] => сентябрь 09

    //     [9] => октябрь 10

    //     [10] => ноябрь 11

    //     [11] => декабрь 12
    // )



    ?>

</body>

</html>