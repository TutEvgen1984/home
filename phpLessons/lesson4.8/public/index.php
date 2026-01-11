<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 4.8" ?>
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
    // 4.8 Проверка существования и удаление элементов массива
    // https: //www.php.net/manual/ru/function.array-key-exists.php
    // https: //www.php.net/manual/ru/function.array-search.php
    // https://www.php.net/manual/ru/function.is-array.php
    // https://www.php.net/manual/ru/function.in-array.php



    // массив начинающийся с 5-го элемента
    $arr = [5 => 1, 2, 3];

    for ($i = 0; $i < 10; $i++) {
        if (isset($arr[$i])) {
            echo " Элемент \$arr[$i] существует<br>";
        } else {
            echo " Элемент \$arr[$i] НЕ существует<br>";
        }
    }
    // Элемент $arr[0] НЕ существует
    // Элемент $arr[1] НЕ существует
    // Элемент $arr[2] НЕ существует
    // Элемент $arr[3] НЕ существует
    // Элемент $arr[4] НЕ существует
    // Элемент $arr[5] существует
    // Элемент $arr[6] существует
    // Элемент $arr[7] существует
    // Элемент $arr[8] НЕ существует
    // Элемент $arr[9] НЕ существует

    if (is_array($arr)) {
        echo "Это массив<br>";
    } else {
        echo "Это НЕ массив<br>";
    }
    // Это массив


    if (is_array($arr[6])) {
        echo "Это массив<br>";
    } else {
        echo "Это НЕ массив<br>";
    }
    // Это НЕ массив

    if (in_array(2, $arr)) {
        echo "Значение 2 найдено в массиве arr<br>";
    } else {
        echo "Значение 2  НЕ найдено";
    }
    // Значение 2 найдено в массиве arr

    // обычный поиск переменной
    if (in_array('2', $arr)) {
        echo "Значение 2 найдено в массиве arr<br>";
    } else {
        echo "Значение 2  НЕ найдено";
    }
    // Значение 2 найдено в массиве arr

    // поиск переменной тождественный с учётом тип. для этого нужно указать 3-й параметр
    if (in_array('2', $arr, true)) {
        echo "Значение 2 найдено в массиве arr<br>";
    } else {
        echo "Значение 2 НЕ найдено в массиве arr<br>";
    }
    // Значение 2 НЕ найдено в массиве arr

    // поиск ключа в массиве

    if (array_key_exists('5', $arr)) {
        echo "Ключ 5 найден в массиве arr<br>";
    } else {
        echo "Ключ 5 НЕ найден в массиве arr<br>";
    }
    // Ключ 5 найден в массиве arr

    if (array_key_exists(4, $arr)) {
        echo "Ключ 4 найден в массиве arr<br>";
    } else {
        echo "Ключ 4 НЕ найден в массиве arr<br>";
    }
    // Ключ 4 НЕ найден в массиве arr

    // поиск значения ключа по ключу

    // $arr = [5 => 1, 2, 3];

    echo array_search(2, $arr);
    // 6
    // это шестой индекс, правильно

    echo "<br>";

    echo array_search(5, $arr);
    // (пусто)

    //  удаление элементов массива
    $arr2 = [5 => 1, 2, 3];
    unset($arr2[6]);
    echo '<pre>';
    print_r($arr2);
    echo '</pre>';
    // Array
    // (
    //     [5] => 1
    //     [7] => 3
    // )
    // 6-ой индекс из массива удалился

    // удаление всего массива
    unset($arr2);
    echo '<pre>';
    print_r($arr2);
    echo '</pre>';
    // Undefined variable $arr2
    // весь массив целиком удалился


    ?>

</body>

</html>