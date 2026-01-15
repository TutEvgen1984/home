<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 5.3" ?>
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
    // 5.3 Глобальные и статические переменные

    function sum()
    {
        // переменная внутри функции статическая (локальная область видимости переменной)
        $var = 2;
        return $var;
    }
    //  переменная снаружи функции (глобальная область видимости)
    $var = 6;
    echo $var;
    // 6
    // вывелась внешняя переменная
    // это разные переменные
    echo "<br>";

    echo sum();
    // 2
    // вывелась внутренняя переменная которая была определена внутри функции
    echo "<br>", "<br>";

    // глобальные переменные
    function sum2()
    {
        // переменная внутри функции, сделаем её с глобальной областью видимости
        global $var2;
        $var2 = 2;
        return $var2;
    }
    // переменная вне функции
    $var2 = 8;
    echo $var2;
    // 8
    echo "<br>";

    echo "sum2() = ", sum2();
    // sum2() = 2
    echo "<br>";

    echo $var2;
    // 2
    echo "<br>", "<br>";
    // переменная вне функции изменилась с 8 на 2

    // ********************

    // статическая переменная static

    function sum3()
    {
        // обычная локальная переменная
        $count = 0;
        return ++$count;
    }

    echo sum3() . "<br>";
    echo sum3() . "<br>";
    echo sum3() . "<br>";
    echo sum3() . "<br>";
    // 1
    // 1
    // 1
    // 1
    //  то есть при вызове функции переменная создаётся, изменяется, выводится и удаляется. а при втором вызове функции переменная создаётся заново

    echo "<br>";


    function sum4()
    {
        // статическая переменная
        static $count = 0;
        return ++$count;
    }

    echo sum4() . "<br>";
    echo sum4() . "<br>";
    echo sum4() . "<br>";
    echo sum4() . "<br>";
    // 1
    // 2
    // 3
    // 4
    // теперь переменная будет сбрасываться только когда обновим страницу, теперь срок жизни как у скрипта

    // возвращение функцией массива
    function formatSize($bytes)
    {
        $kbytes = $bytes / 1024;
        $mbytes = $kbytes / 1024;
        $gbytes = $mbytes / 1024;
        return [$bytes, $kbytes, $mbytes, $gbytes];
    }

    echo "<pre>";
    print_r(formatSize(54989777));
    echo "<pre>";
    // Array
    // (
    //     [0] => 54989777
    //     [1] => 53700.954101562
    //     [2] => 52.442337989807
    //     [3] => 0.051213220693171
    // )

    // затем этот массив можно как-то обрабатывать

    // использование конструкции list
    list($bytes, $kbytes, $mbytes, $gbytes) = formatSize(54989777);
    echo "$bytes<br>$kbytes<br>$mbytes<br>$gbytes<br>";
    // 54989777
    // 53700.954101562
    // 52.442337989807
    // 0.051213220693171

    echo "<br>";

    //  обычное присваивание
    $arr = formatSize(54989777);
    $bytes1 = $arr[0];
    $kbytes1 = $arr[1];
    $mbytes1 = $arr[2];
    $gbytes1 = $arr[3];
    echo "$bytes1<br>$kbytes1<br>$mbytes1<br>$gbytes1<br>";
    // 54989777
    // 53700.954101562
    // 52.442337989807
    // 0.051213220693171

    ?>

</body>

</html>