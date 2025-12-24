<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 2.1" ?>
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
    //
    require 'point.php';

    // 2 двоеточия после названия класса позволяют обратиться к статической переменной
    echo Point::$num; // 120

    echo "<br>";

    // рассмотрим переменные:
    $first = 2;
    $second = $first;

    // переопределим переменную
    $first = 3;

    echo "{$first}<br>";
    // 3 (стала 3 вместо 2)
    echo "{$second}<br>";
    // 2 (осталась изначальной)

    $first_obj = new Point;
    $first_obj->x = 3;
    $first_obj->y = 3;

    // второй объект ссылается на первый (это не клонирование)
    $second_obj = $first_obj;
    $second_obj->x = 5;
    $second_obj->y = 5;

    echo "first_obj. x: {$first_obj->x}, y: {$first_obj->y} <br>";
    // first_obj. x: 5, y: 5

    // переменные, способы передачи ссылками
    $first_var = 5;

    // с помощью & задаётся указание на создание ссылки
    $second_var = &$first_var;
    $second_var = 3;

    echo "first_var=$first_var, second_var=$second_var";
    // first_var=3, second_var=3



    ?>

</body>

</html>