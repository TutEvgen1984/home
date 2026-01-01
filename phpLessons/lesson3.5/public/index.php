<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.5" ?>
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

    // 3.5 Условный оператор if
    // https://www.php.net/manual/ru/control-structures.if.php

    // if (condition) {
    //     # code...
    // } else {
    //     # любой код
    // }

    if (true) {
        echo "Истина"; # Истина
    } else {
        echo "Ложь";
    }

    echo "<br>";

    if (1) {
        echo "Истина"; # Истина
    } else {
        echo "Ложь";
    }

    echo "<br>";

    if ('1') {
        echo "Истина"; # Истина
    } else {
        echo "Ложь";
    }

    echo "<br>";

    if (false) {
        echo "Истина";
    } else {
        echo "Ложь"; # Ложь
    }

    echo "<br>";

    if (0) {
        echo "Истина";
    } else {
        echo "Ложь"; # Ложь
    }

    echo "<br>";

    if ('0') {
        echo "Истина";
    } else {
        echo "Ложь"; # Ложь
    }

    echo "<br>";

    // ниже такой вид записи не рекомендуется по стандарту
    if ('1')
        echo "Истина";

    echo "<br>";

    // проверка большого количества условий
    if (false) {
        echo "Истина0";
    } elseif (false) {
        echo "Истина1";
    } elseif (true) {
        echo "Истина2"; # выполнилась только эта строка
    } elseif (true) {
        echo "Истина3";
    } elseif (true) {
        echo "Истина4";
    } else { # блок else является блоком
        echo "Истина5";
    }
    // Истина2
    // выполнилась только одна строка где "Истина2", а все остальное было проигнорировано даже не смотря на то, что там в условии стоит true

    echo "<br>";

    // ***************************************

    $char = "php";
    if ($char == "php") {
        echo "Язык php"; # Сработала эта строка
    } elseif ($char == 'js') {
        echo "Язык js";
    } elseif ($char == 'c#') {
        echo "Язык c#";
    } else {
        echo "Неизвестный язык";
    }

    echo "<br>";


    ?>

    <?php

    $char2 = "c#";
    if ($char2 == "php") {
    ?>
        <h1>Язык php</h1>
    <?php
    } elseif ($char2 == 'js') {
    ?>
        <h1>Язык JavaScript</h1>
    <?php
    } elseif ($char2 == 'c#') {
    ?>
        <h1>Язык C#</h1> <!-- Выполнилось это -->
    <?php
    } else {
    ?>
        <h1>Неизвестный человечеству язык</h1>
    <?php
    }
    ?>
</body>

</html>