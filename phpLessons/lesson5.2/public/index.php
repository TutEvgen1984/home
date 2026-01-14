<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 5.2" ?>
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
    // 5.2 Параметры и аргументы функций

    function sum1($a, $b)
    {
        return $a + $b;
    }
    echo sum1(2, 3) . "<br>";
    // 5

    // принимаемые параметры должны быть обязательно типа int
    // : int  после круглых скобок означает тип возвращаемого значения
    function sum2(int $a, int $b): int
    {
        return $a + $b;
    }
    echo sum2(4.7, 8.1) . "<br>";
    // 12

    echo "<br>";

    // **************************

    // передача параметров в функцию по значению и по ссылке

    // по умолчанию параметры в функцию передаются по значению, а не по ссылке
    function sum3($a)
    {
        $a = $a + 10;
        return $a;
    }
    $b = 10;
    echo sum3($b); // 20
    echo "<br>";
    echo $b;
    // 10
    // то есть переменная $b НЕ изменилась
    echo "<br>", "<br>";

    // передача параметра в функцию по ссылке (использование символа &)
    function sum4(&$a)
    {
        $a = $a + 10;
        return $a;
        // вернули значение этой переменной
    }
    $b = 10;
    echo sum4($b); // 20
    echo "<br>";
    echo $b;
    // 20
    // то есть переменная $b изменилась
    echo "<br>", "<br>";

    // объекты и массивы в функцию передаются по умолчанию по ссылке, и им не нужно указывать значок &

    // если в функцию не передавать необходимую переменную, то можно сделать значение по умолчанию
    // все необязательные параметры нужно указывать после обязательных


    function sum5($b, $a = 10)
    {
        return $a + $b;
    }

    echo sum5(8);
    // 18
    // переменная $a получилось, что равна 10 по умолчанию так как мы её сами не передали
    echo "<br>";

    echo sum5(8, 1);
    // 9
    // теперь в переменную $a поместилось значение 1

    echo "<br>", "<br>";

    // использование символов ... это означает воспринимать значение как массив
    // это особенно удобно когда заранее неизвестно количество параметров
    function outArguments(...$items)
    {
        foreach ($items as $arg) {
            echo "$arg<br>";
        }
    }

    outArguments('PHP', 'JS', 'C++', 'Python');
    // PHP
    // JS
    // C++
    // Python

    echo "<br>";


    // **********************

    // обратная манипуляция ...
    function outArguments2($a, $b, $c, $d)
    {
        echo "$a<br>";
        echo "$b<br>";
        echo "$c<br>";
        echo "$d<br>";
    }

    $items = ['PHP', 'JS', 'C++', 'Python'];

    outArguments2(...$items);
    // PHP
    // JS
    // C++
    // Python


    ?>

</body>

</html>