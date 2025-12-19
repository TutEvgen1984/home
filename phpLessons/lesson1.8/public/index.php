<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.8" ?>
    </title>
    <style>
        body {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>

    <?php
    // https://www.php.net/manual/ru/function.isset
    // isset — Определяет, была ли установлена переменная значением, отличным от null

    $user = "Ivan";
    if (isset($user)) {
        $bool1 = isset($user);
        echo $bool1, "<br>";
        // 1

        echo "Переменная существует", "<br>";
    } else {
        $bool2 = isset($user);
        echo $bool2, "<br>";
        //

        echo "Переменная не существует", "<br>";
    }
    // Переменная существует

    // ***
    // https://www.php.net/manual/ru/function.empty.php
    // empty — Проверяет, пуста ли переменная
    $str = "1";
    if (empty($str)) {
        echo "Строка пустая", "<br>";
    } else {
        echo "В строке что то есть", "<br>";
    }

    // ***
    // https://www.php.net/manual/ru/function.gettype.php
    // gettype — Возвращает тип переменной
    echo gettype(123), "<br>";
    // integer


    echo gettype("123"), "<br>";
    // string

    echo gettype(true), "<br>";
    // boolean

    echo gettype(1.25), "<br>";
    // double

    // ***
    // https://www.php.net/manual/ru/function.is-int.php
    // is_int — Проверяет, представляет ли собой переменная целое число

    echo is_int(1), "<br>";
    // 1

    if (is_int(1)) {
        echo " Это целое число", "<br>";
    } else {
        echo "Не целое число", "<br>";
    }
    // Это целое число

    if (is_int(1.25)) {
        echo " Это целое число", "<br>";
    } else {
        echo "Не целое число", "<br>";
    }
    // Не целое число

    $var_null = null;

    echo isset($var_null);
    // false или 0, но его на странице почему-то не видно
    // isset() вернёт false при проверке переменной которая была установлена значением null.

    echo "<br>";

    $var_1 = 1;
    unset($var_1);
    echo isset($var_1);
    // false типа
    // Если переменная была удалена с помощью unset(), то она больше не считается установленной.

    echo "<br>";

    $var_2 = 0;
    if (empty($var_2)) {
        echo "Строка пустая", "<br>";
    } else {
        echo "В строке что то есть", "<br>";
    }
    // Строка пустая
    // Возвращает true, если параметр var не существует, если значение равно нулю, либо не задано. В противном случае возвращает false.

    $data = array(1, 1., NULL, new stdClass, 'foo');
    // 1. - это 1.0
    foreach ($data as $value) {
        echo gettype($value), "\n";
    }

    ?>

</body>

</html>