<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>Быстрая сортировка массива</title>
</head>

<body>
    <?php
    // Быстрая сортировка Хоара - это алгоритм сортировки разработанный английским Информатиком Чарльзом Хоаром в 1960 году. Один из самых быстрых известных универсальных алгоритмов сортировки массивов. В этом уроке мы реализуем алгоритм быстрой сортировки массива на языке PHP. Мы будем работать с блок схемой данного алгоритма и напишем код программы.

    // такая сортировка уже применена в стандартной функции sort в php (там опорный элемент берется из середины массива)
    // https://www.php.net/manual/ru/function.sort

    // https://rutube.ru/video/6cac8c3436933655ea13d306727da75a/?r=wd

    // далее напишем такую сортировку сами, в котором в качестве опорного элемента будем брать нулевой элемент
    // pivot = опорный элемент, стержень (англ.)

    $arr = [33, 5, 12, 18, 4, 8, 8, 9, 0, 1, 3, 4, 8, 22, 68, 7];

    function quicksort($array)
    {
        if (count($array) < 2) {
            return $array;
        } else {
            $pivot = $array[0];
            $less = [];
            $greater = [];
            for ($i = 1; $i < count($array); $i++) {
                if ($array[$i] <= $pivot) {
                    array_push($less, $array[$i]);
                }
                if ($array[$i] > $pivot) {
                    array_push($greater, $array[$i]);
                }
            }
            return array_merge(quicksort($less), [$pivot], quicksort($greater));
        }
    }

    echo '<pre>';
    print_r(quicksort($arr));
    echo '</pre>';
    //     Array
    // (
    //     [0] => 0
    //     [1] => 1
    //     [2] => 3
    //     [3] => 4
    //     [4] => 4
    //     [5] => 5
    //     [6] => 7
    //     [7] => 8
    //     [8] => 8
    //     [9] => 8
    //     [10] => 9
    //     [11] => 12
    //     [12] => 18
    //     [13] => 22
    //     [14] => 33
    //     [15] => 68
    // )

    ?>

</body>

</html>