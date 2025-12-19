<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.7" ?>
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

    // 1.7 Логический и строковый тип данных

    $bool1 = true;
    $bool2 = false;

    $str1 = "Hello world! '123456789'";
    echo "$str1";
    // Hello world! '123456789'

    echo "<br>";

    // $str2 = "Hello world! "123456789" ";
    // Parse error: syntax error, unexpected integer "123456789" in D:\Develop\OSPanel\home\phpLessons\lesson1.7\public\index.php on line 27

    $var = 5;
    echo "Hello world! - $var";
    // Hello world! - 5

    echo "<br>";

    echo "Hello world! - \$var";
    // Hello world! - $var

    echo "<br>";

    echo "Hello world! - \"$var\"";
    // Hello world! - "5"

    echo "<br>";

    echo "Hello world! - {$var}3";
    // Hello world! - 53

    echo "<br>";

    echo `dir`;

    ?>

</body>

</html>