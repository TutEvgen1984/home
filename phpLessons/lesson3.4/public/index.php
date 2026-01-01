<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.4" ?>
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

    // 3.4 Операторы сравнения
    // https://www.php.net/manual/ru/language.operators.comparison.php

    $x = 1;
    $y = '1';

    // 1) меньше '<'
    echo 1 < '1'; // пусто (false)

    echo $x < $y; // пусто (false)

    // 2) меньше либо равно '<='

    echo 1 <= '1'; // 1 (true)

    // 3) Больше '>'

    echo 1 > '1'; // пусто (false)

    // 4) Больше либо равно '>='

    echo 1 >= '1'; // 1 (true)

    // ******************************

    // 5) нестрогое равно '=='. сравнивает без учета их типа

    echo 1 == '1'; // 1 (true)

    // 6) НЕ равно '!='. сравнивает без учета их типа

    echo 1 != '1'; // пусто (false)

    // это тоже НЕ равно. сравнивает без учета их типа
    echo 1 <> '1'; // пусто (false)

    // 7) Тождественно равно, строгое равно '==='. и значения должны быть равны, и типы должны быть равны

    echo 1 === '1'; // пусто (false)

    echo '<br>';

    // 8) строгое НЕ равно '!=='. и значения должны быть НЕ равны, и типы должны быть НЕ равны

    echo 1 !== '1'; // 1 (true)

    echo '<br>';

    // 9) Космический корабль (spaceship)

    echo 1 <=> '1'; // 0 (так как переменные равны)


    echo 5 <=> '1'; // 1 (так как число 5 больше 1)


    echo 1 <=> '6'; // -1 (так как число 1 меньше 6)

    echo '<br>';



    echo 1 > 0;  // 1 (true)

    echo '<br>';

    echo 1 > 1;  // пусто (false)

    echo '<br>';

    echo 1 >= 1;  // 1 (true)

    echo '<br>';

    echo 1 < 0;  // пусто (false)

    echo '<br>';

    echo 1 < 1;  // пусто (false)

    echo '<br>';

    echo 1 <= 1;  // 1 (true)

    echo '<br>';

    echo 1 == 0;  // пусто (false)

    echo '<br>';

    echo 1 == 1;  // 1 (true)

    echo '<br>';

    echo 1 != 0;  // 1 (true)

    echo '<br>';

    echo 1 != 1;  // пусто (false)

    echo '<br>';

    echo 0 == '8qes';  // пусто (false)

    echo '<br>';

    echo 0 == '';  // пусто (false)

    echo '<br>';

    echo 0 == 'Hello';  // пусто (false)

    echo '<br>';

    echo 0 == null;  // 1 (true)

    echo '<br>';

    echo 0 === null;  // пусто (false)


    ?>

</body>

</html>