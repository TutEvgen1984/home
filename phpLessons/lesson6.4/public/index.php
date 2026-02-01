<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 6.4" ?>
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
    // 6.4 Форматный вывод

    // printf — Выводит отформатированную строку
    // https: //www.php.net/manual/ru/function.printf.php

    printf("Первое число - %d <br>", 26);
    // Первое число - 26

    $number = 5867;
    printf('Двоичное число : %b <br>', $number);
    // Двойное число : 1011011101011

    printf('Десятичное число : %d <br>', $number);
    // Десятичное число : 5867

    printf('Число с плавающей точкой: %f <br>', $number);
    // Число с плавающей точкой: 5867.000000

    printf('Восьмеричное число: %o <br>', $number);
    // Восьмеричное число: 13353

    printf('Строковое представление: %s <br>', $number);
    // Строковое представление: 5867

    printf('Шестнадцатеричное число (нижний регистр): %x <br>', $number);
    // Шестнадцатеричное число (нижний регистр): Шестнадцатеричное число (нижний регистр): 16eb

    printf('Шестнадцатеричное число (Верхний регистр): %X <br>', $number);
    // Шестнадцатеричное число (Верхний регистр): 16EB

    $red = 255;
    $green = 255;
    $blue = 100;
    printf('#%X%X%X <br>', $red, $green, $blue);
    // #FFFF64

    echo "<pre>";
    printf('%4d', 45);
    //   45 (два пробела впереди)
    echo "<br>";
    printf('%04d', 45);
    // 0045 (два нуля впереди)
    echo "<br>";

    printf('%4.2f', 454.54678);
    // 454.55
    echo "<br>";

    printf('%.4f', 45.99774);
    // 45.9977
    echo "<br>";

    echo "</pre>";

    // *****************
    // explode — Разбивает строку разделителем
    // https://www.php.net/manual/ru/function.explode.php

    $str1 = 'Имя, Фамилия, e-mail';
    echo "<pre>";
    print_r(explode(', ', $str1));
    echo "</pre>";
    // Array
    // (
    //     [0] => Имя
    //     [1] => Фамилия
    //     [2] => e-mail
    // )

    $str2 = 'Имя-Фамилия-e-mail';
    echo "<pre>";
    print_r(explode('-', $str2));
    echo "</pre>";
    // Array
    // (
    //     [0] => Имя
    //     [1] => Фамилия
    //     [2] => e
    //     [3] => mail
    // )

    $str3 = 'Имя:Фамилия:e-mail';
    echo "<pre>";
    print_r(explode(':', $str3, 2));
    echo "</pre>";
    // Array
    // (
    //     [0] => Имя
    //     [1] => Фамилия:e-mail
    // )

    // *****************
    // implode — Объединяет элементы массива в строку
    // https://www.php.net/manual/ru/function.implode.php

    $arr1 = ['Имя', 'Фамилия', 'e-mail', 'Номер'];
    echo implode(', ', $arr1);
    // Имя, Фамилия, e-mail, Номер
    echo "<br>";

    echo implode(' ', $arr1);
    // Имя Фамилия e-mail Номер
    echo "<br>";

    echo implode('', $arr1);
    // ИмяФамилияe-mailНомер
    echo "<br><br>";

    // *******************

    $pizza  = "кусок1 кусок2 кусок3 кусок4 кусок5 кусок6";
    $pieces = explode(" ", $pizza);
    echo $pieces[0];
    // кусок1
    echo "<br>";

    echo $pieces[1];
    // кусок2
    echo "<br>";

    $data = "foo:*:1023:1000::/home/foo:/bin/sh";
    list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
    echo $user;
    // foo
    echo "<br>";

    echo $pass;
    // *
    echo "<br>";

    // ************************
    // var_dump — Выводит информацию о переменной
    // https://www.php.net/manual/ru/function.var-dump.php

    $array = ['имя', 'почта', 'телефон'];
    var_dump(implode(",", $array));
    // string(32) "имя,почта,телефон"
    echo "<br>";

    // Пустая строка при использовании пустого массива:
    var_dump(implode('привет', []));
    //string(0) ""
    echo "<br>";

    // Параметр separator не обязателен:
    var_dump(implode(['a', 'b', 'c']));
    echo "<br>";
    // string(3) "abc"

    ?>

</body>

</html>