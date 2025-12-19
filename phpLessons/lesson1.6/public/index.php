<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.6" ?>
    </title>
    <style>
        body {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>
    <!-- 1.6 Целые и вещественные числа -->
    <?php
    $num1 = 1234;
    $num2 = +1234;
    $num3 = -1234;

    // восьмеричная система. впереди ставится ноль
    $num4 = 012;

    // 16-ричная. впереди 0x
    $num5 = 0x12A;

    // 8-ричная система
    echo 07 + 03;
    // получили 10. это в 10-ричной системе

    // echo 08 + 03;
    // Parse error: Invalid numeric literal in D:\Develop\OSPanel\home\phpLessons\lesson1.6\public\index.php on line 34

    echo "<br>";

    echo 0xA + 0xF;
    // 25

    echo "<br>";

    // Вещественные числа
    $var = 1.23456;
    echo $var;
    // 1.23456

    echo "<br>";

    // чисто умножит на 10 в -3 степени. это вещественные числа в экспоненциальной форме
    $var2 = 1.23456e-3;
    echo $var2;
    // 0.00123456

    echo "<br>";

    $var3 = 1.23456e+3;
    echo $var3;
    // 1234.56

    echo "<br>";

    $var4 = 5.0 * 10e+3;
    echo $var4;
    // 50000

    echo "<br>";

    $var5 = 5.0e-3;
    echo $var5;
    // 0.005

    echo "<br>";

    $var6 = 5.0e+3;
    echo $var6;
    // 5000
    ?>

</body>

</html>