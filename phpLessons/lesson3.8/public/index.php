<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.8" ?>
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
    // 3.8 Переключатель switch
    // Переключатель switch это аналог условного оператора на языке php. С помощью switch можно обрабатывать сложные условия.
    // https://www.php.net/manual/ru/control-structures.switch.php
    // https://www.php.net/manual/ru/control-structures.break.php

    // Синтаксис оператора Switch
    /* switch(проверка) {

    case значение1:
        выражение
        ...
        break;

    case значениеN:
        выражение
        ...
        break;

    default:
        выражение
        ...
    }
    */

    $char = 'php';
    switch ($char) {
        case 'php':
    ?>
            <h1>Язык php</h1>

        <?php
            break;
        case 'js':
        ?>

            <h1>Язык JavaScript</h1>

        <?php
            break;
        case 'c#':
        ?>

            <h1>Язык C#</h1>

        <?php
            break;

        // default это аналог else
        default:
        ?>
            <h1>Неизвестный человечеству язык</h1>

    <?php
    }
    // код с использованием if
    $number = 120;
    if ($number > 0 && $number <= 10) {
        echo "$number меньше 10 и больше 0";
    } elseif ($number > 10 && $number <= 100) {
        echo "$number меньше 100 и больше 10";
    } elseif ($number > 100 && $number <= 1000) {
        echo "$number меньше 1000 и больше 100";
    } else {
        echo "$number больше 1000 или меньше 0";
    }

    echo "<br>";

    // код с использованием switch

    switch (true) {
        case ($number > 0 && $number <= 10):
            echo "$number меньше 10 и больше 0";
            break;

        case ($number > 10 && $number <= 100):
            echo "$number меньше 100 и больше 10";
            break;

        case ($number > 100 && $number <= 1000):
            echo "$number меньше 1000 и больше 100";
            break;

        default:
            echo "$number больше 1000 или меньше 0";
            break;
            // для default можно не использовать break так как он находится у самос конце
    }

    ?>

</body>

</html>