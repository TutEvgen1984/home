<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.7" ?>
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
    // 3.7 Тернарный условный оператор, ??, goto

    // Тернарный оператор
    // выражение1 ? выражение2          : выражение3                ;
    // блок if    ? {код в случае true} : else {код в случае false} ;

    // классическое применение тернарного оператора: получение абсолютного значения какого нибудь числа
    $x = -450;
    $x = $x < 0 ? -$x : $x;
    echo $x; // 450

    echo "<br>";

    // ***********************************
    // оператор ??

    $y1 = null;

    $y1 = $y1 ?? 1;
    // ?? означает, что $y1 присвоится 1 только в том случае, если до этого $y был либо null, либо был вообще не определен, а если был уже определён, то  так и останется $y1

    echo $y1; // 1

    echo "<br>";

    $y2 = -3;

    $y2 = $y2 ?? 1;
    // $y2 до этого уже было определён, поэтому сработает выражение $y2 = $y2

    echo $y2; // -3

    echo "<br>";

    // оператор goto
    // goto finish;

    $n = 0;

    // метка
    finish:
    $n++;
    if ($n > 6) {
        goto end;
    }

    goto finish; // выход вверх

    // метка
    end:

    echo "n=$n"; // n=7

    ?>
</body>

</html>