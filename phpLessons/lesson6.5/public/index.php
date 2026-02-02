<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 6.5" ?>
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
    // 6.5 Работа с JSON

    // Подробнее о JSON можно узнать в этом видео уроке на Дзен:
    // https://dzen.ru/video/watch/627a270bbcf9435902a3d1fb


    $arr1 = [
        'name' => 'Petr',
        'phones' => [
            '888',
            '777'
        ]
    ];

    // Преобразование из объекта в json (упаковать в json):
    // json_encode — Возвращает JSON-представление данных
    // https://www.php.net/manual/ru/function.json-encode.php

    $encodedArr1 = json_encode($arr1);
    echo $encodedArr1;
    // {"name":"Petr","phones":["888","777"]}


    // Преобразование из json (распаковать из json):
    // json_decode — Декодирует строку JSON
    // https://www.php.net/manual/ru/function.json-decode.php

    // чтобы получить массив нужно после запятой указать true
    echo "<pre>";
    print_r(json_decode($encodedArr1, true));
    echo "</pre>";
    // Array
    // (
    //     [name] => Petr
    //     [phones] => Array
    //         (
    //             [0] => 888
    //             [1] => 777
    //         )
    // )

    // если указать false или ничего не указать, то поручим объект
    echo "<pre>";
    print_r(json_decode($encodedArr1));
    echo "</pre>";
    // stdClass Object
    // (
    //     [name] => Petr
    //     [phones] => Array
    //         (
    //             [0] => 888
    //             [1] => 777
    //         )

    // )



    ?>

</body>

</html>