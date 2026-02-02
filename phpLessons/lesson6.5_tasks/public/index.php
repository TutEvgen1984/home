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

    $secondName31 = "Тютиков";
    $secondName32 = "Черемных";

    $nSymbols31 = mb_strlen($secondName31);
    echo "nSymbols31 = ", $nSymbols31, "<br>";

    $nSymbols32 = mb_strlen($secondName32);
    echo "nSymbols32 = ", $nSymbols32, "<br>";

    if ($nSymbols31 > $nSymbols32) {
        echo "Фамилия №1 длиннее чем фамилия №2", "<br>";
    } elseif ($nSymbols31 == $nSymbols32) {
        echo "Фамилия №1 равна длине фамилии №2", "<br>";
    } else {
        echo "Фамилия №2 длиннее чем фамилия №1", "<br>";
    }

    echo "<br>";

    // ***********************

    // 6.4. Даны названия трех городов. Вывести на экран самое длинное и самое короткое названия.

    $citiesNames4 = ["Томск", "Омск", "Барнаул"];

    $citiesLengths4 = [mb_strlen($citiesNames4[0]), mb_strlen($citiesNames4[1]), mb_strlen($citiesNames4[2])];

    echo "citiesLengths4 = ";
    print_r($citiesLengths4);
    echo "<br>";
    // citiesLengths4 = Array ( [0] => 5 [1] => 4 [2] => 7 )

    // поиск самого длинного названия
    $maxIndex4 = 0;
    $minIndex4 = 0;
    for ($i = 0; $i < count($citiesNames4); $i++) {
        if (mb_strlen($citiesNames4[$i])) {
        }
    }

    $max4 = max($citiesLengths4);
    echo $max4, "<br>";

    ?>

</body>

</html>