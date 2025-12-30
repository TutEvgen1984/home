<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.1" ?>
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

    $num1 = 7;
    echo 'Выводим на экран число ' . $num1 . '<br>'; // Выводим на экран число 1

    echo 'Выводим на экран число ' . $num1 . ' другой текст' . '<br>'; // Выводим на экран число 1 другой текст

    $num2 = 2;
    $num2 = $num2 . '+3';
    echo $num2 . '<br>'; // 2+3

    $num3 = 3;
    $num3 .= '+4';
    echo $num3 . '<br>'; // 3+4

    echo 'Выводим на экран число ', $num3, ' другой текст', '<br>'; // Выводим на экран число 3+4 другой текст
    // через точку это конкатенация строк, а через запятую это перечисление параметров

    print 'Строка 1 \n\r';

    print 'Строка 2 \n';

    print '<br>';

    echo $num3 . '<br>' . $num3 . '<br>';
    ?>

</body>

</html>