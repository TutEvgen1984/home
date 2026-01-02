<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.6" ?>
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
    // 3.6 Логические операторы

    // Логическое И (&&)
    $num = 5;
    if ($num > 0 && $num < 8) {
        echo "0 < $num < 8"; // 0 < 5 < 8
    }

    echo "<br>";

    // Логическое ИЛИ (||)
    $num = 9;
    if ($num > 0 || $num < 8) {
        echo "Сработало условие ИЛИ (||) "; // Сработало условие ИЛИ (||)
    }

    echo "<br>";

    // Логическое отрицание
    $num = -9;
    if (!($num > 0)) {
        echo "Число отрицательное"; // Число отрицательное
    }

    echo "<br>";

    // в программировании часто используется переменная флаг
    $f = true;
    $flag = false;

    if ($f) {
        echo "Переменная \$f true"; // Переменная true
    }

    echo "<br>";

    $f2 = $num < 0;
    if ($f2) {
        echo "Переменная \$f2 true"; // Переменная true
    }

    echo "<br>";

    // Заполните ячейки таблицы правильными результатами

    // Логическое ИЛИ ||
    $f3 = true || true;
    echo "\$f3= $f3"; // $f3= 1 (true)
    echo "<br>";

    // Логическое отрицание
    $f4 = !true;
    echo "\$f4= $f4"; // $f4= (пусто = false)
    echo "<br>";

    // Логическое ИЛИ ||
    $f5 = false || true;
    echo "\$f5= $f5"; // $f5= 1 (true)
    echo "<br>";

    // Логическое ИЛИ ||
    $f6 = false || false;
    echo "\$f6= $f6"; // $f6= (пусто = false)
    echo "<br>";

    // Логическое И &&
    $f7 = true && true;
    echo "\$f7= $f7"; // $f7= 1 (true)
    echo "<br>";

    // Логическое И &&
    $f8 = false && true;
    echo "\$f8= $f8"; // $f8= (пусто = false)
    echo "<br>";

    ?>
</body>

</html>