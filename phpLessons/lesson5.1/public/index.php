<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 5.1" ?>
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
    // 5.1 Функции

    // функции пишутся в CamelCase, но с маленькой буквы
    // классы пишутся с большой буквы

    function myFunctionForDeleteArray()
    {
        return "asd";
    }

    // рекомендуемое использование функции
    function myFunction1()
    {
        $sum = 20 + 4;
        return $sum;
    }

    echo myFunction1();
    // 24

    echo "<br>";

    echo myFunction1();
    echo myFunction1();
    echo myFunction1();
    // 24

    echo "<br>";

    //  не рекомендуемое использование функции
    function myFunction2()
    {
        $sum = 20 + 4;
        echo $sum;
    }

    myFunction2();

    echo "<br>";

    //  создание функцию с двумя параметрами $a и $b
    function myFunction3($a, $b)
    {
        $sum = $a + $b;
        return $sum;
    }

    // в функцию передаём 2 аргумента
    echo myFunction3(1, 10), "<br>";
    // 11

    ?>

</body>

</html>