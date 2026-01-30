<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 6.2" ?>
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
    // 6.2 Работа с подстроками
    // https://www.php.net/manual/ru/function.trim.php

    $date = '30.01.2026';

    // substr — Возвращает подстроку
    // https://www.php.net/manual/ru/function.substr.php

    echo 'день ' . substr($date, 0, 2) . '<br>';
    echo 'месяц ' . substr($date, 3, 2) . '<br>';
    echo 'год ' . substr($date, 6) . '<br>';
    // день 30
    // месяц 01
    // год 2026

    // ***********

    // strpos — string position - Ищет позицию первого вхождения подстроки
    // https://www.php.net/manual/ru/function.strpos.php

    $str1 = 'Hello world';
    echo strpos($str1, 'world');
    echo "<br>";
    // 6

    $str2 = 'PHP - this интерпретируемый язык';
    echo strpos($str2, 'интер');
    echo "<br>";
    // 11 (если искать в строке с кириллицей, то номера получается завышенные, но все равно  дальнейший поиск работает)
    echo substr($str2, strpos($str2, 'интер'));
    // интерпретируемый язык

    echo "<br>";

    // *******************
    // замена текста
    // https://www.php.net/manual/ru/function.str-replace.php

    $str3 = 'PHP - [b]интерпретируемый[/b] язык, а это [b]жирный текст[/b]';
    $str3 = str_replace('[b]', '<b>', $str3);
    echo $str3 . "<br>";
    // PHP - интерпретируемый[/b] язык, а это жирный текст[/b] (текст на странице жирный начиная с тире)

    $str3 = str_replace('[/b]', '</b>', $str3);
    echo $str3 . "<br>";
    // PHP - интерпретируемый язык, а это жирный текст (весь текст жирный)

    ?>

</body>

</html>