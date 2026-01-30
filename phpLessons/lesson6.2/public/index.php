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
    echo $str3 . "<br>";
    // PHP - [b]интерпретируемый[/b] язык, а это [b]жирный текст[/b]

    // заменим символы в квадратных скобках на HTML теги
    $str3 = str_replace('[b]', '<b>', $str3);
    $str3 = str_replace('[/b]', '</b>', $str3);
    echo $str3 . "<br>";
    // Посмотреть код страницы:
    // PHP - <b>интерпретируемый</b> язык, а это <b>жирный текст</b><br>

    echo "<br>";


    $str4 = 'PHP - [b]интерпретируемый[/b] язык, а это [b]жирный текст[/b]';
    echo $str4 . "<br>";

    // в качестве второго параметра функции поставим пустоту,и тогда у нас найденное просто удалится
    $str4 = str_replace('[b]', '', $str4);
    $str4 = str_replace('[/b]', '</b>', $str4);

    echo $str4 . "<br>";

    // передача массива в качестве поиска (массив поиска должен соответствовать длине массива замены)
    $str5 = 'PHP - [b]интерпретируемый[/b] язык, а это [b]жирный текст[/b]';
    echo $str5 . "<br>";

    // 4ым необязательным параметром зададим переменную $number, в неё функция поместит количество замен, которые она сделала
    $str5 = str_replace(['[b]', '[/b]'], ['', ''], $str5, $number);
    echo $str5 . "<br>";
    // Посмотреть код страницы:
    // PHP - интерпретируемый язык, а это жирный текст
    // в результатом получили компактный код

    echo "Осуществлено замен: " . $number . "<br>";
    // 4

    // *******************
    // https://www.php.net/manual/ru/function.trim.php

    $str6 = '  Hello, world! ';
    echo strlen($str6);
    // 16
    echo "<br>";
    echo strlen(trim($str6));
    // 13 (отрезали 2 пробела спереди и один сзади)
    echo "<br>";

    // вторым необязательным параметром передадим список символов, которые нужно удалить
    echo trim($str6, " H!");
    // второй параметр писать обязательно с пробелом вначале, иначе работать не будет

    echo "<br>";

    $rest = substr("abcdef", -1);
    echo $rest . "<br>";
    // f

    $rest = substr("abcdef", -2);
    echo $rest . "<br>";
    // ef

    $rest = substr("abcdef", -3, 1);
    echo $rest . "<br>";
    // d

    $rest = substr("abcdef", 0, -1);
    echo $rest . "<br>";
    // abcde

    $rest = substr("abcdef", 2, -1);
    echo $rest . "<br>";
    // cde

    $rest = substr("abcdef", 4, -4);
    echo $rest . "<br>";
    // возвращает ""; до PHP 8.0.0 возвращалось false

    $rest = substr("abcdef", -3, -1);
    echo $rest . "<br>";
    // de

    ?>

</body>

</html>