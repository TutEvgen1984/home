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

    $point1 = new Point();
    $point1->x = 13;
    $point1->y = 2;
    echo "$point1->x <br>"; // 13

    $point2 = new Point;
    $point2->x = 11;
    $point2->y = 47;
    echo $point2->x . "<br>"; // 11

    // unset($point2);
    echo $point2->x . "<br>";
    // Warning: Undefined variable $point2 in D:\Develop\OSPanel\home\phpLessons\lesson2.1\public\index.php on line 35
    // Warning: Attempt to read property "x" on null in D:\Develop\OSPanel\home\phpLessons\lesson2.1\public\index.php on line 35

    ?>

</body>

</html>