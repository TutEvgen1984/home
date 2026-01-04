<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.10" ?>
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
    // 3.11 Цикл do while
    // цикл с постусловием. Цикл do while на PHP гарантирует то что тело цикла будет выполнено как минимум один раз, а уже после этого проверяется условие и цикл либо продолжается либо завершается.
    // do {
    // действие повторяется, до тех пор пока условие истинно
    // тело цикла выполняется как минимум один раз
    // } while(условие);
    $i = 0;
    do {
        echo "$i<br>";
    } while (++$i <= 5);
    // 0
    // 1
    // 2
    // 3
    // 4
    // 5
    // здесь условие окончания это <=5 (ноль false не останавливает цикл)




    ?>

</body>

</html>