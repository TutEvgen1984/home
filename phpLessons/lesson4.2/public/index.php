<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 4.1" ?>
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
    // 4.2 Ассоциативные массивы
    $arr1 = ['one' => "1", 'two' => "2"];
    echo "<pre>";
    print_r($arr1);
    echo "<pre>";
    // Array
    // (
    //     [one] => 1
    //     [two] => 2
    // )

    echo $arr1["one"]; // 1

    // создание массива, который заранее не определён (он сам создастся)
    $arr2['one'] = '3';
    $arr2['two'] = '4';
    echo "<pre>";
    print_r($arr2);
    echo "<pre>";
    // Array
    // (
    //     [one] => 3
    //     [two] => 4
    // )

    // создание  нескольких ключей с одинаковым названием перезаписывает их на последний
    // регистрация имеет значение. one и One это два разных ключа
    $arr3['one'] = '1';
    $arr3['One'] = '10';
    $arr3['two'] = '2';
    $arr3['two'] = '20'; // ключ two перезаписался
    echo "<pre>";
    print_r($arr3);
    echo "<pre>";
    //     Array
    // (
    //     [one] => 1
    //     [One] => 10
    //     [two] => 20
    // )

    ?>

</body>

</html>