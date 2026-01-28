<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 6.1" ?>
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
    // 6.1 Работа со строками
    // https: //www.php.net/manual/ru/function.strlen.php
    // https: //www.php.net/manual/ru/function.mb-strlen.php
    // https: //www.php.net/manual/ru/function.chr.php
    // https: //www.php.net/manual/ru/function.ord.php

    $strEn = "Hello world";
    echo $strEn[0];
    // H

    echo "<br>";

    echo "\u{0410}";
    // А

    echo "<br>";

    // Кириллица
    $strRu = "Привет, мир!";
    echo $strRu[0];
    // � (появился непонятный значок так как мы получили половину символа)

    echo "<br>";

    // необходимо расширение mbstring для сервера (в Open Server Panel)
    // mb - multi byte

    // strlen = string length
    // для строк подсчетом длины занимается не count (для массивов), а именно strlen()
    // Замечание: Функция strlen() возвращает количество байтов, а не количество символов в строке.
    echo strlen($strRu);
    // 21
    // каждый символ на русском языке занимает 2 байта. русских букв там 9, занимают они 2*9=18. пробел, запятая и ! по одному байту. 18+3=21

    echo "<br>";

    // функция из расширения mb string, которое делает все эти операции правильно с многобайтными кодировками
    echo mb_strlen($strRu);
    // 12 ( это правильно, у нас ровно 12 символов)

    echo "<br><br>";

    // *****************************

    $strEn2 = "Hello";
    for ($i = 0; $i < strlen($strEn2); $i++) {
        echo $strEn2[$i] . "<br>";
    }
    // H
    // e
    // l
    // l
    // o

    // символ соответствующий коду
    echo chr(36);
    // $
    // символ из кода

    echo "<br>";

    // функция числовой код на основе символа
    echo ord("$");
    // 36
    // код из символа

    echo "<br>";



    ?>

</body>

</html>