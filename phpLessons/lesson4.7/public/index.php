<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 4.7" ?>
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
    // 4.7 Слияние и сравнение массивов
    // https://www.php.net/manual/ru/function.array-merge.php
    // https://www.php.net/manual/ru/ref.array.php

    // 1) слияние массивов

    // 2 массива у которых индексы НЕ пересекаются
    $first1 = [1 => 'red', 2 => 'blue'];
    $second1 = [3 => 'brown', 4 => 'green'];
    // результирующий массив (от слова concatenation)
    $con1 = $first1 + $second1;
    echo '<pre>';
    print_r($con1);
    echo '</pre>';
    // Array
    // (
    //     [1] => red
    //     [2] => blue
    //     [3] => brown
    //     [4] => green
    // )

    echo "<br>";

    // 2 массива у которых индексы пересекаются
    $first2 = [1 => 'red', 2 => 'blue'];
    $second2 = [1 => 'brown', 4 => 'green'];
    // результирующий массив. при пересечении индексов результате будет то что было в первом массиве (тот что слева от плюса)
    $con2 = $first2 + $second2;
    echo '<pre>';
    print_r($con2);
    echo '</pre>';
    // Array
    // (
    //     [1] => red
    //     [2] => blue
    //     [4] => green
    // )

    // 2 массива у которых индексы стандартной нумерации
    $first3 = ['red', 'blue'];
    $second3 = ['brown', 'green'];
    // результирующий массив. при пересечении индексов результате будет то что было в первом массиве (тот что слева от плюса), в результате второй массив вообще не использовался
    $con3 = $first3 + $second3;
    echo '<pre>';
    print_r($con3);
    echo '</pre>';
    // Array
    // (
    //     [0] => red
    //     [1] => blue
    // )

    // для того, чтобы исправить отсутствие слияния выше и слить 2 массива, нужно использовать array_merge
    // 2 массива у которых индексы стандартной нумерации
    $first4 = ['red', 'blue'];
    $second4 = ['brown', 'green'];
    // слияние массивом, array_merge и в скобках сливаемые массивы через запятую
    $con4 = array_merge($first4, $second4);
    echo '<pre>';
    print_r($con4);
    echo '</pre>';
    // Array
    // (
    //     [0] => red
    //     [1] => blue
    //     [2] => brown
    //     [3] => green
    // )

    // 2)  сравнение массивов

    $first5 = ['red', 'blue'];
    $second5 = ['brown', 'green'];
    $third5 = ['red', 'blue'];

    if ($first5 == $second5) {
        echo " Массивы равны<br>";
    } else {
        echo " Массивы \$first5 и \$second5 НЕ равны<br>";
    }
    // Массивы $first5 и $second5 НЕ равны

    if ($first5 == $third5) {
        echo " Массивы \$first5 и \$third5 равны<br>";
    } else {
        echo " Массивы НЕ равны<br>";
    }
    // Массивы $first5 и $third5 равны

    // массивы с разными типами данных
    $first6 = ['1', 'blue'];
    $second6 = [1, 'blue'];
    //  простое сравнение "равно"
    if ($first6 == $second6) {
        echo " Массивы 6 равны<br>";
    } else {
        echo " Массивы 6 НЕ равны<br>";
    }
    // Массивы 6 равны

    // сравнение "Тождественно равно"
    if ($first6 === $second6) {
        echo " Массивы 6 равны<br>";
    } else {
        echo " Массивы 6 Тождественно НЕ равны<br>";
    }
    // Массивы 6 Тождественно НЕ равны

    // массивы с одинаковыми типами данных, но с разными типами ключей
    $first7 = [1 => '1', 'blue'];
    $second7 = ['1' => '1', 'blue'];
    //  простое сравнение "равно"
    if ($first7 == $second7) {
        echo " Массивы 7 равны<br>";
    } else {
        echo " Массивы 7 НЕ равны<br>";
    }
    // Массивы 7 равны

    // сравнение "Тождественно равно"
    if ($first7 === $second7) {
        echo " Массивы 7 равны<br>";
    } else {
        echo " Массивы 7 Тождественно НЕ равны<br>";
    }
    // Массивы 7 равны

    ?>

</body>

</html>