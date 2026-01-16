<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 5.43" ?>
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
    // 5.4 Рекурсия, вложенные и анонимные функции
    // Рекурсия - это вызов функцией саму себя
    // https://www.php.net/manual/ru/function.usort.php
    // usort — Сортирует массив по значениям через пользовательскую функцию сравнения элементов

    function recursion($counter)
    {
        if ($counter > 0) {
            echo $counter-- . '<br>';
            recursion($counter);
        } else return; // выход из функции без каких либо операций, функция просто завершается
    }
    recursion(8);
    // 8
    // 7
    // 6
    // 5
    // 4
    // 3
    // 2
    // 1

    // ******************

    // вложенные функции
    // функции могут объявляться внутри других функций

    function outter()
    {
        function inner()
        {
            return "Hello World";
        }
    }

    // inner();
    // Fatal error: Uncaught Error: Call to undefined function inner()

    // сначала нужно вызвать внешнюю функцию, затем только внутреннюю

    outter();
    echo inner();
    echo "<br>";
    // Hello World

    // ***********************

    // динамическое имя функции

    function first()
    {
        return "First function";
    }
    function second()
    {
        return "Second function";
    }
    $newFunction = rand(0, 1) ? 'first' : 'second';
    // $newFunction будет как бы преобразовано в текстовую строку first либо second

    echo $newFunction();
    // скобки мы добавили сами вручную
    // Second function
    // либо
    // First function
    // случайным образом сработает функция с названием либо first(), либо second()

    // ******************

    // анонимные функции на языке php
    // анонимная функция это функция, которая не имеет своего названия
    // ее преимущество в том, что ее можно передавать в качестве аргумента для других функций




    ?>

</body>

</html>