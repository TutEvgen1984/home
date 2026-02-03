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

    $maxLength4 = max($citiesLengths4);
    echo $maxLength4, "<br>";
    // 7

    $minLength4 = min($citiesLengths4);
    echo $minLength4, "<br>";
    // 4

    // поиск индекса по значению (максимального и минимального):
    // array_search — Ищет значение в массиве, и если находит, возвращает ключ первого найденного элемента
    // https://www.php.net/manual/ru/function.array-search.php

    $maxIndex4 = array_search($maxLength4, $citiesLengths4);
    echo "maxIndex4=", $maxIndex4, "<br>";
    // maxIndex4=2

    $minIndex4 = array_search($minLength4, $citiesLengths4);
    echo "minIndex4=", $minIndex4, "<br>";
    // minIndex4=1

    // поиск макс и мин значения по найденным индексам:

    // https://www.php.net/manual/ru/function.printf.php

    $maxValue4 = $citiesNames4[$maxIndex4];
    printf("Самое длинное название: %s <br>", $maxValue4);
    // Самое длинное название: Барнаул

    $minValue4 = $citiesNames4[$minIndex4];
    printf("Самое короткое название: %s <br>", $minValue4);
    // Самое короткое название: Омск

    // ************************
    // 6.5. Дано слово. Вывести на экран его третий символ.

    // слово на английском
    $word5_1 = "word";
    $symbol3_51 = $word5_1[2];
    printf("Третий символ: %s <br>", $symbol3_51);
    // Третий символ: r

    // слово на русском
    $word5_2 = "Слово";
    $symbol3_52 = mb_substr($word5_2, 2, 1);
    printf("Третий символ: %s <br>", $symbol3_52);
    // Третий символ: r

    // *********************

    // 6.6. Дано слово. Вывести на экран его последний символ.
    $word6 = "Слово2 Терминатор";
    $symbolLast_6 = mb_substr($word6, -1, 1);
    printf("Последний символ: %s <br>", $symbolLast_6);

    // 6.7. Дано предложение. Вывести все буквы м и н в нем.
    $str6 = "Терминатор и робокоп ннн";
    echo mb_strlen($str6), '<br>';
    // 20

    echo $str6[0], '<br>';
    // � (потому что русские буквы, не прокатит, надо использовать mb_substr)

    for ($i = 0; $i < mb_strlen($str6); $i++) {
        if ((mb_substr($str6, $i, 1) == 'м') or (mb_substr($str6, $i, 1) == 'н')) {
            echo mb_substr($str6, $i, 1) . "<br>";
        }
    }
    // м
    // н
    // н
    // н
    // н


    ?>

</body>

</html>