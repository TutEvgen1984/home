<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 2.5" ?>
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

    // 2.5 Путь к файлу, константы класса
    // Абсолютный путь до файла, который вызвал этот скрипт
    echo 'Путь файлу: ' . __DIR__ . '<br>';
    // Путь файлу: D:\Develop\OSPanel\home\phpLessons\lesson2.5\public

    // require_once '../../lesson2.3/public/point.php';
    // два раза выход из точки нахождения текущего файла - сначала из папки public в папку lesson2.5, затем из папки lesson2.5 в папку phpLessons, а от туда уже идем в папку lesson2.3 и далее

    // воспользуемся конкатенацией с помощью точки
    require_once __DIR__ . '/../../lesson2.3/public/point.php';
    // Выражение require_once Аналогично require за исключением того, что PHP проверит, включался ли уже данный файл, и если да, не будет включать его ещё раз.

    // class Point
    // {
    //     public $x;
    //     public $y;
    //     public static $num = 120;
    // }

    $first_obj = new Point;
    $first_obj->x = 3;
    $first_obj->y = 3;
    echo "first_obj. x: $first_obj->x, y: $first_obj->y <br>";

    $a = "Привет, ";
    $a .= "Мир!";   // Переменная $a теперь содержит строку "Привет, Мир!"
    var_dump($a); // string(27) "Привет, Мир!ааа"
    // 27 получилось потому что один символ кириллицы в стандартной кодировки php равен 2 байтам

    echo "<br>";

    // чтобы получить правильное число, нужно использовать следующее
    echo "Длина: " . iconv_strlen($a, 'UTF-8') . "<br>"; // Длина: 15

    class ConstClass
    {
        // создадим константу с помощью const (не define)
        const NAME = "str";
    }

    // доступ к константам как к статическим переменным класса
    echo ConstClass::NAME . "<br>"; // str

    if (defined("ConstClass::NAME")) {
        echo "Константа NAME определена" . "<br>"; // Константа NAME определена
    }

    if (defined("ConstClass::POS")) {
        echo "Константа POS определена" . "<br>";
    } else {
        echo "Константа POS не определена" . "<br>"; // Константа POS не определена
    }



    ?>

</body>

</html>