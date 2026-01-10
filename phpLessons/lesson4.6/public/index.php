<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 4.5" ?>
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
    // 4.6 Обход массива циклом for и foreach

    // цикл for для индексных массивов
    // https://www.php.net/manual/ru/function.count.php
    // count — Подсчитывает количество элементов в массиве или в объекте

    $number = ['1', '2', '3', '4', 'hello', true, 54];

    for ($i = 0; $i < count($number); $i++) {
        echo '' . $number[$i] . '<br>';
    }
    // 1
    // 2
    // 3
    // 4
    // hello
    // 1
    // 54

    echo "<br>";

    // цикл foreach для ассоциативных пассивов

    $arr1 = [
        'auto' => 'Dodge',
        'plane' => 'IL-2',
        'ship' => 'Black Pearl'
    ];
    foreach ($arr1 as $key => $value) {
        echo "$key : $value <br>";
    }
    // auto : Dodge
    // plane : IL-2
    // ship : Black Pearl

    echo "<br>";

    //  проход по массиву не используя ключи, используем только значения
    foreach ($arr1 as $value) {
        echo "$value <br>";
    }
    // Dodge
    // IL-2
    // Black Pearl

    echo "***************************<br>";

    // Ассоциативный многомерный массив
    $transport = [
        'Авто' => ['Лада', 'Chevrolet', 'Dodge'],
        'Самолеты' => ['Ил-2', 'И-16', 'Массершмидт'],
        'Корабли' => ['Авианосец', 'Фрегат', 'Эсминец']
    ];

    // первый способ - снаружи foreach, внутри тоже foreach

    // echo "<ul>";

    foreach ($transport as $key => $array) {
        echo "<b>$key</b><br>";
        echo "<ul>";
        foreach ($array as $value) {
            echo "<li>$value</li>";
        }
        echo "</ul>";
    }
    // echo "</ul>";

    // Авто
    // * Лада
    // * Chevrolet
    // * Dodge
    // Самолеты
    // * Ил-2
    // * И-16
    // * Массершмидт
    // Корабли
    // * Авианосец
    // * Фрегат
    // * Эсминец

    echo "***************************<br>";

    // второй способ - снаружи foreach, внутри обычный for
    foreach ($transport as $key => $array) {
        echo "<b>$key</b><br>";
        echo "<ul>";
        for ($i = 0; $i < count($array); $i++) {
            echo "<li>$array[$i]</li>";
        }
        echo "</ul>";
    }
    // точно также результат как и выше

    ?>

</body>

</html>