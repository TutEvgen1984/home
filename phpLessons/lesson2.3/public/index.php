<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 2.3" ?>
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

    $first_obj = new Point;
    $first_obj->x = 3;
    $first_obj->y = 3;

    // сделаем клонирование объекта ()
    $second_obj = clone $first_obj;
    $second_obj->x = 5;
    $second_obj->y = 5;

    echo "first_obj. x: $first_obj->x, y: $first_obj->y <br>";
    // first_obj. x: 3, y: 3

    echo "second_obj. x: $second_obj->x, y: $second_obj->y <br>";
    // second_obj. x: 5, y: 5

    // https://www.php.net/manual/ru/function.pow.php
    // 2 в 8-й степени
    echo pow(2, 8) . "<br>"; // 256
    // первый параметр это основание, второй это степень

    // корень
    echo sqrt(16) . "<br>"; // 4

    // Решение задачи нахождения расстояния между 2-мя точками

    // создадим точку 1.1
    $p1 = new Point;
    $p1->x = 3;
    $p1->y = 5;

    // создадим точку 1.2
    $p2 = new Point;
    $p2->x = 7;
    $p2->y = 12;

    $distance1 = sqrt(pow(($p2->x - $p1->x), 2) + pow(($p2->y - $p1->y), 2));
    echo "\$distance1 = $distance1 <br>";
    // $distance = 8.0622577482985

    // создадим точку 2.1
    $p3 = new Point;
    $p3->x = 10;
    $p3->y = 34;

    // создадим точку 2.2
    $p4 = new Point;
    $p4->x = 3;
    $p4->y = 10;

    $distance2 = sqrt(pow(($p4->x - $p3->x), 2) + pow(($p4->y - $p3->y), 2));
    echo "\$distance2 = $distance2 <br>";
    // $distance2 = 25

    echo pow(-1, 17);

    echo "<br>";

    echo pow(0, 0);

    echo "<br>";

    echo pow(0, 10);

    echo "<br>";

    echo pow(8, -1);

    echo "<br>";

    echo pow(-1, 3.5);

    echo "<br>";

    echo pow(16, 0.5);

    ?>

</body>

</html>