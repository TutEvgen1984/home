<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "6.5 - Задачи" ?>
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
    // 6.5 Задачи

    // 6.1. Дано название футбольного клуба. Определить количество символов в нем.

    $clubName = "Томь";
    $nSymbols1 = mb_strlen($clubName);
    echo $nSymbols1 . "<br><br>";
    // 4

    // ******************************

    // 6.2. Дано название города. Определить, четно или нет количество символов в нем.
    $cityName = "Томск";
    echo "Название города: " . $cityName . "<br>";

    $nSymbols2 = mb_strlen($cityName);
    echo $nSymbols2 . "<br>";
    // 5

    // вычисление четности числа
    function isEven(int $number)
    {
        if ($number % 2 == 0) {
            return "Четное";
            // если число поделилась на 2 без остатка, то оно чётное
        } else {
            return "Не четное";
            // остаток от деления на 2 больше 0, значит число НЕчетное
        }
    };

    echo "Количество символов в название города " . isEven($nSymbols2), "<br>";
    // Количество символов в название города Не четное
    echo "<br>";


    // *******************************

    // 6.3. Даны две фамилии. Определить, какая из них длиннее.



    ?>

</body>

</html>