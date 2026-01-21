<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 5.4" ?>
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

    $arr = ['php', 'Python', 'Ruby', 'JS', 'Go'];
    sort($arr);
    echo "<pre>";
    print_r($arr);
    echo "<pre>";
    // Array
    // (
    //     [0] => Go
    //     [1] => JS
    //     [2] => Python
    //     [3] => Ruby
    //     [4] => php
    // )

    //  сортировка объектов
    class Point
    {
        public $x;
        public $y;
        // public означает что переменная доступна как снаружи так и изнутри
        // то есть переменные $x и $y мы можем установить вне класса
        // если public убрать, то появляется ошибка Parse error: syntax error, unexpected variable "$x", expecting "function"
        // если написать private, то появляется ошибка Cannot modify property from global scope
        // есть еще protective (h используется при наследовании классов)
    }

    $fst = new Point;
    $fst->x = 12;
    $fst->y = 5;

    $snd = new Point;
    $snd->x = 1;
    $snd->y = 1;

    $thd = new Point;
    $thd->x = 4;
    $thd->y = 10;

    // поместили 3 созданных объекта в массив
    $arr2 = [$fst, $snd, $thd];

    echo '<pre>';
    print_r($arr2);
    echo '</pre>';

    // Array
    // (
    //     [0] => Point Object
    //         (
    //             [x] => 12
    //             [y] => 5
    //         )

    //     [1] => Point Object
    //         (
    //             [x] => 1
    //             [y] => 1
    //         )

    //     [2] => Point Object
    //         (
    //             [x] => 4
    //             [y] => 10
    //         )

    // )

    // сортируем объекты с помощью usort
    // usort — Сортирует массив по значениям через пользовательскую функцию сравнения элементов
    // https://www.php.net/manual/ru/function.usort.php
    usort($arr2, function ($a, $b) {
        $dist_a = sqrt($a->x ** 2 + $a->y ** 2);
        $dist_b = sqrt($b->x ** 2 + $b->y ** 2);
        return $dist_a <=> $dist_b;
        // <=> это Космический корабль (spaceship)
        // возвращать будет +1, 0 или +1
    });
    echo '<pre>';
    print_r($arr2);
    echo '</pre>';

    // Array
    // (
    //     [0] => Point Object
    //         (
    //             [x] => 1
    //             [y] => 1
    //         )

    //     [1] => Point Object
    //         (
    //             [x] => 4
    //             [y] => 10
    //         )

    //     [2] => Point Object
    //         (
    //             [x] => 12
    //             [y] => 5
    //         )

    // )

    ?>

</body>

</html>