<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 4.3" ?>
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
    // 4.3 Многомерные массивы

    // Ассоциативный массив
    $transport = [
        'Авто' => ['Лада', 'Chevrolet', 'Dodge'],
        'Самолеты' => ['Ил-2', 'И-16', 'Массершмидт'],
        'Корабли' => ['Авианосец', 'Фрегат', 'Эсминец']
    ];
    echo "<pre>";
    print_r($transport);
    echo "<pre>";
    // Array
    // (
    //     [Авто] => Array
    //         (
    //             [0] => Лада
    //             [1] => Chevrolet
    //             [2] => Dodge
    //         )

    //     [Самолеты] => Array
    //         (
    //             [0] => Ил-2
    //             [1] => И-16
    //             [2] => Мессершмидт
    //         )

    //     [Корабли] => Array
    //         (
    //             [0] => Авианосец
    //             [1] => Фрегат
    //             [2] => Эсминец
    //         )

    // )

    echo $transport['Самолеты'][2];
    // Мессершмидт

    echo '<br>';

    // Индексный массив
    $transport2 = [
        ['Лада', 'Chevrolet', 'Dodge'],
        ['Ил-2', 'И-16', 'Массершмидт'],
        ['Авианосец', 'Фрегат', 'Эсминец']
    ];
    echo $transport2[0][2]; // Dodge
    echo '<br>';
    echo $transport2[2][1]; // Фрегат

    echo '<br>';

    ?>

</body>

</html>