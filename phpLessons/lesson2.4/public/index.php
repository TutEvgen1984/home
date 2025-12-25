<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 2.4" ?>
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
    // https://www.php.net/manual/ru/function.define.php
    // define — Определяет именованную константу
    // define("NUMBER", 1, true);
    define("NUMBER1", 1);
    // название  константы пишется с полностью большими буквами - это для того чтобы отличать их от обычных переменных
    // true =  не чувствительно к регистру ($case_insensitive) is ignored since declaration of case-insensitive constants is no longer supported
    echo NUMBER1 . "<br>"; // 1
    // причём пишется она без $ впереди

    if (define("NUMBER2", 2)) {
        echo " константа NUMBER2 успешно создана и имеет значение 2";
    }

    if (define("NUMBER2", 4)) {
        echo " константа NUMBER2 успешно создана и имеет значение 4";
    }
    // Warning: Constant NUMBER2 already defined in D:\Develop\OSPanel\home\phpLessons\lesson2.4\public\index.php on line 34

    if (!define("NUMBER2", 4)) {
        echo "1) Константа уже создана <br>";
    }
    // Warning: Constant NUMBER2 already defined in D:\Develop\OSPanel\home\phpLessons\lesson2.4\public\index.php on line 39
    // 1) Константа уже создана

    //  функция defined() - для того чтобы проверить создана ли уже константа с таким именем
    if (defined("NUMBER2")) {
        echo "2) Константа уже создана";
    }
    // 2) Константа уже создана




    ?>

</body>

</html>