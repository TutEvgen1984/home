<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.13" ?>
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
    // 3.13 Задачи
    // было лень переписывать с сайта сюда
    $a = 8;
    $min_number = 190;
    $founded_number = null;

    $i = $min_number;
    while ($founded_number == null) {
        if ($i % $a == 0) {
            $founded_number = $i;
            break;
        }
        $i++;
    }

    ?>

</body>

</html>