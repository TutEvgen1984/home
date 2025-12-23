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

    $first = $second = 2;

    // переопределим переменную
    $first = 3;

    echo $first . "<br>";
    // 3
    echo $second . "<br>";
    // 2


    ?>

</body>

</html>