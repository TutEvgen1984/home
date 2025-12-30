<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.2" ?>
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
    // 3.2 Арифметические операторы

    // ** это возведение в степень
    echo 4 ** 2; // 16

    echo '<br>';

    // % это остаток от деления
    echo 8 % 3; // 2

    echo '<br>';

    // далее хотим получить е статус от деления,а наоборот получить целое число от деления

    echo 8 / 3; // 2.6666666666667

    echo '<br>';

    // явное преобразование к целому типу
    echo (int) (8 / 3);  // 2

    echo '<br>';

    // самая оптимальная проверка на честность
    if (8 % 2) echo 'Число не четное';
    else echo "Число четное"; // Число четное

    echo '<br>';

    if (9 % 2) echo 'Число не четное'; // Число не четное
    else echo "Число четное";

    echo '<br>';

    // https://www.php.net/manual/ru/language.operators.assignment.php

    $num = 1;
    $var = 1;

    // Конкатенация строк
    $num = $num . $var;
    $num .= $var;

    // Сложение
    $num = $num + $var;
    $num += $var;

    // вычитание
    $num = $num - $var;
    $num -= $var;

    // Умножение
    $num = $num * $var;
    $num *= $var;

    // Деление
    $num = $num / $var;
    $num /= $var;

    // Модуль
    $num = $num % $var;
    $num %= $var;

    // Возведение в степень
    $num = $num ** $var;
    $num **= $var;

    $var2 = 3;

    // постфиксная запись инкремента
    echo $var2++; // 3
    echo '<br>';
    echo $var2; // 4
    echo '<br>';

    // префиксная запись инкремента
    echo ++$var2; // 5
    echo '<br>';

    // префиксная запись декремента
    echo --$var2; // 4
    echo '<br>';

    echo 16 ** 0.5; // 4
    echo '<br>';

    echo 15 % 4; // 3
    echo '<br>';

    ?>

</body>

</html>