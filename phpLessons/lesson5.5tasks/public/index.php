<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 5.5 задачи" ?>
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
    // 5.5 Замыкания - Задачи

    // Процедура - это функция, которая ничего не возвращает.

    // 5.1. Составить процедуру, «рисующую» на экране горизонтальную линию из 60 символов «*».

    function horizonLine($n)
    {
        for ($i = 1; $i <= $n; $i++) {
            echo "*";
        }
    }

    horizonLine(60);

    echo "<br>";

    // 5.2. Составить программу, в результате которой величина а меняется значением с величиной b, а величина c – с величиной d. (Определить процедуру, осуществляющую обмен значениями двух переменных величин.)

    $a = 'a';
    $b = 'b';
    $c = 'c';
    $d = 'd';

    function exchange()
    {
        global $a, $b, $c, $d;
        $temp_a = $a;
        $temp_b = $b;
        $temp_c = $c;
        $temp_d = $d;

        // способ 1
        /*
        $a = $temp_b;
        $b = $temp_a;
        $c = $temp_d;
        $d = $temp_c;
        */

        // способ 2

        [$a, $b, $c, $d] = [$temp_b, $temp_a, $temp_d, $temp_c];
    }

    exchange();

    echo "\$a=", $a, "<br>";
    echo "\$b=", $b, "<br>";
    echo "\$c=", $c, "<br>";
    echo "\$d=", $d, "<br>";

    // 5.3. Даны стороны двух треугольников. Найти сумму их периметров и сумму их площадей. (Определить процедуру для расчета периметра и площади треугольника по его сторонам.)

    $n_of_triangle = 2;
    $side_of_triangle = 10;

    // стороны треугольника
    $a_triangle = 3;
    $b_triangle = 6;
    $c_triangle = 5;

    $perimeter_of_triangle = null;
    // процедура для расчета периметра треугольника
    function perimeter_of_triangle()
    {
        global $a_triangle;
        global $b_triangle;
        global $c_triangle;
        global $perimeter_of_triangle;

        $perimeter_of_triangle = $a_triangle + $b_triangle + $c_triangle;
    }

    perimeter_of_triangle();

    echo "периметр треугольника = ", $perimeter_of_triangle;

    echo "<br>";

    $s_triangle = null;
    // процедура для расчета площади треугольника
    function area_of_triangle()
    {
        global $a_triangle;
        global $b_triangle;
        global $c_triangle;

        global $s_triangle;

        // формула Герона для нахождения площади треугольника через 3 стороны

        // полу-периметр
        $p_triangle = ($a_triangle + $b_triangle + $c_triangle) / 2;

        // площадь треугольника по формуле Герона
        $s_triangle = sqrt($p_triangle * ($p_triangle - $a_triangle) * ($p_triangle - $b_triangle) * ($p_triangle - $c_triangle));
    }

    area_of_triangle();
    echo "площадь треугольника по формуле Герона = ", $s_triangle;

    echo "<br>";

    // 5.4. Даны основания и высоты двух равнобедренных трапеций. Найти сумму их периметров. (Определить функцию для расчета периметра равнобедренной трапеции по ее основаниям и высоте.)

    // равнобедренная трапеция 1
    $base_a1 = 15;
    $base_b1 = 9;
    $h1 = 5;

    // равнобедренная трапеция 2
    $base_a2 = 20;
    $base_b2 = 12;
    $h2 = 9;

    function trapeze_perimeter($a, $b, $h)
    {
        // c — боковая сторона трапеции, которая вычисляется по теореме Пифагора
        $c = sqrt($h ** 2 + ($b - $a) ** 2 / 4);

        // периметр равнобедренной трапеции
        $p = $a + $b + $c;

        return $p;
    }

    $p1 = trapeze_perimeter($base_a1, $base_b1, $h1);
    echo "периметр трапеции 1 = ", $p1;

    echo "<br>";

    $p2 = trapeze_perimeter($base_a2, $base_b2, $h2);
    echo "периметр трапеции 2 = ", $p2;

    echo "<br>";

    $sum_of_perimeters = round(($p1 + $p2), 2);
    echo "сумма периметров = ", $sum_of_perimeters;

    ?>

</body>

</html>