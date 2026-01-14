<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 5.3" ?>
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
    // 5.3 Глобальные и статические переменные

    function sum()
    {
        // переменная внутри функции статическая
        $var = 2;
        return $var;
    }
    //  переменная снаружи функции
    $var = 6;
    echo $var;
    // 6
    // вывелась внешняя переменная
    // это разные переменные
    echo "<br>";

    echo sum();
    // 2
    // вывелась внутренняя переменная которая была определена внутри функции
    echo "<br>", "<br>";

    // глобальные переменные
    function sum2()
    {
        // переменная внутри функции глобальная
        global $var2;
        $var2 = 2;
        return $var2;
    }
    // переменная вне функции
    $var2 = 8;
    echo $var2;
    // 8
    echo "<br>";

    echo "sum2() = ", sum2();
    // sum2() = 2
    echo "<br>";

    echo $var2;
    // 2
    echo "<br>";
    // переменная вне функции изменилась с 8 на 2



    ?>

</body>

</html>