<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 3.10" ?>
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
    // 3.10 Цикл while
    // цикл с предусловием While

    echo "сначала выводим потом увеличиваем<br>";
    $i = 1;
    while ($i <= 5) {
        echo "$i<br>";
        $i++;
    }
    // 1 2 3 4 5
    echo "финальная i после цикла = $i<br>";
    // финальная i после цикла = 6

    echo "<br>";

    echo "сначала увеличиваем потом выводим<br>";
    $i = 1;
    while ($i <= 5) {
        $i++;
        echo "$i<br>";
    }
    // 2 3 4 5 6
    echo "финальная i после цикла = $i<br>";
    // финальная i после цикла = 6

    echo "<br>";

    echo "использование break<br>";
    $i = 1;
    while ($i <= 5) {
        $i++;
        if ($i > 5) break;
        echo "$i<br>";
    }
    // 2 3 4 5
    echo "финальная i после цикла = $i<br>";
    // финальная i после цикла = 6

    echo "<br>";

    echo "использование continue (пропуск итераций)<br>";
    $i = 1;
    while ($i <= 5) {
        $i++;
        if ($i < 4) continue;
        if ($i > 5) break;
        echo "$i<br>";
    }
    // 4 5
    echo "финальная i после цикла = $i<br>";
    // финальная i после цикла = 6

    echo "<br>";

    echo "использование continue (пропуск итераций)<br>";
    $i = 1;
    while ($i <= 5) {
        $i++;
        if ($i == 4) continue;
        if ($i > 5) break;
        echo "$i<br>";
    }
    // 4 5
    echo "финальная i после цикла = $i<br>";
    // финальная i после цикла = 6

    echo "<br>";

    echo "использование break 2-го уровня, цикл в цикле<br>";
    $i = 1;
    $j = 1;
    while ($i <= 5) {
        echo "i=$i<br>";
        $i++;
        if ($i == 4) continue;
        if ($i > 5) break;

        while ($j <= 5) {
            echo "j=$j<br>";
            $j++;
            if ($j > 5) {
                echo "break2<br>";
                break 2;
            };
            // break 2 останавливает 2 цикла - и свой и внешний
            // break 1 останавливает только свой цикл (внешний продолжается)
        }
    }
    // i=1
    // j=1
    // j=2
    // j=3
    // j=4
    // j=5

    echo "<br>";

    echo "использование break 1-го уровня, цикл в цикле<br>";
    $i = 1;
    $j = 1;
    while ($i <= 5) {
        echo "i=$i<br>";
        $i++;
        if ($i == 4) continue;
        if ($i > 5) break;

        while ($j <= 5) {
            echo "j=$j<br>";
            $j++;
            if ($j > 5) {
                echo "break1<br>";
                break 1;
            };
            // break 2 останавливает 2 цикла - и свой и внешний
            // break 1 останавливает только свой цикл (внешний продолжается)
        }
    }
    // i=1
    // j=1
    // j=2
    // j=3
    // j=4
    // j=5
    // i=2
    // i=3
    // i=4
    // i=5

    echo "<br>";

    print "расчет внутри условия цикла, префиксная запись --\$i<br>";
    $i = 5;
    while (--$i) {
        echo "$i<br>";
    }
    // цикл while заканчивается когда $i станет равным 0 что будет означать false
    // префиксная = сначала посчитали, потом проверили - и если не 0 то выполнили, поэтому 0 в выводе мы не видим
    // 4
    // 3
    // 2
    // 1

    echo "<br>";

    print "расчет внутри условия цикла, постфиксная запись \$i--<br>";
    $i = 5;
    while ($i--) {
        echo "$i<br>";
    }
    // постфиксная = сначала посчитали, потом выполнили тело, потом проверили. Поэтому видим 0 в выводе
    // 4
    // 3
    // 2
    // 1
    // 0

    echo "<br>";

    ?>

</body>

</html>