<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.9" ?>
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
    // 1.9 Явное и неявное приведение типов

    // ** Неявное приведение типа:

    $str1 = "45.2";
    $number1 = $str1 - 12;
    echo $number1, "<br>";
    // 33.2

    /* $str2 = "45.2hhyy";
    $number2 = $str2 - 12;
    echo $number2; */
    // Warning: A non-numeric value encountered in D:\Develop\OSPanel\home\phpLessons\lesson1.9\public\index.php on line 29
    // 33.2

    /* $str3 = "hhyy";
    $number3 = $str3 - 12;
    echo $number3; */
    // Fatal error: Uncaught TypeError: Unsupported operand types: string - int in D:\Develop\OSPanel\home\phpLessons\lesson1.9\public\index.php:35 Stack trace: #0 {main} thrown in D:\Develop\OSPanel\home\phpLessons\lesson1.9\public\index.php on line 35

    /* $str4 = "hhyy";
    $number4 = 12;
    $result4 = $str4 + $number4;
    echo $result4; */
    // Fatal error: Uncaught TypeError: Unsupported operand types: string + int in D:\Develop\OSPanel\home\phpLessons\lesson1.9\public\index.php:41 Stack trace: #0 {main} thrown in D:\Develop\OSPanel\home\phpLessons\lesson1.9\public\index.php on line 41

    $var1 = 0.0;
    if ($var1) {
        echo 'переменная $var рассматривается как true', "<br>";
    } else {
        echo 'переменная $var рассматривается как false', "<br>";
    }
    // переменная $var рассматривается как false

    $var2 = "любой текст будет преобразован как true";
    if ($var2) {
        echo 'переменная $var рассматривается как true', "<br>";
    } else {
        echo 'переменная $var рассматривается как false', "<br>";
    }
    // переменная $var рассматривается как true

    $var3 = "0";
    if ($var3) {
        echo 'переменная $var рассматривается как true', "<br>";
    } else {
        echo 'переменная $var рассматривается как false', "<br>";
    }
    // переменная $var рассматривается как false

    echo false, "<br>";
    //
    // вывелась пустая строка, занимающая место в потоке

    echo true, "<br>";
    // 1

    // Явное приведение типа:

    $float = 4.3;
    $number = (int)$float;
    echo $number, "<br>";
    // 4


    // Четное ли число с помощью приведения типов

    $num1 = 21;
    $f1 = (float)($num1 / 2) - (int)($num1 / 2);
    if ($f1) {
        echo "Число не четное", "<br>";
    } else {
        echo "Число четное", "<br>";
    }
    // Число четное

    $num2 = 24;
    $f2 = (float)($num2 / 2) - (int)($num2 / 2);
    if ($f2) {
        echo "Число не четное", "<br>";
    } else {
        echo "Число четное", "<br>";
    }
    // Число четное


    ?>

</body>

</html>