<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 7.3" ?>
    </title>
    <style>
        body {
            color: white;
            background-color: black;
            font-size: 36px;
        }

        input,
        select {
            font-size: 36px;
        }
    </style>
</head>

<body>

    <?php
    // 7.3 Работа с элементами формы checkbox, radio, select

    ?>

    <!-- №1 -->
    <form action="script.php" method="POST">
        <input type="checkbox" name="html" checked>Я знаком с HTML<br>
        <input type="checkbox" name="css">Я знаком с CSS<br>
        <input type="checkbox" name="js">Я знаком с JavaScript<br>
        <input type="checkbox" name="php" checked>Я знаком с PHP<br>
        <input type="submit" value="Отправить">
    </form>
    <!--
    Array
    (
        [html] => on
        [php] => on
    )
    1
    -->

    <!-- №2 -->
    <!-- <form action="script.php" method="POST">
        <input type="checkbox" value="1" name="html" checked>Я знаком с HTML<br>
        <input type="checkbox" value="2" name="css">Я знаком с CSS<br>
        <input type="checkbox" value="3" name="js">Я знаком с JavaScript<br>
        <input type="checkbox" value="4" name="php" checked>Я знаком с PHP<br>
        <input type="submit" value="Отправить">
    </form> -->
    <!--
    Array
    (
        [html] => 1
        [php] => 4
    )
    1
    -->

    <!-- №3 -->
    <!-- <form action="script.php" method="POST">
        <select name="fst[]" multiple size="3">
            <option value="1" selected>Первый пункт</option>
            <option value="2">Второй пункт</option>
            <option value="3">Третий пункт</option>
        </select>
        <br>
        <br>
        <select name="snd">
            <option value="one">Первый пункт</option>
            <option value="two">Второй пункт</option>
            <option value="three">Третий пункт</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Отправить">
    </form> -->
    <!--
    Array
    (
        [fst] => Array
            (
                [0] => 1
                [1] => 3
            )

        [snd] => two
    )
    1
    -->

    <!-- №4 -->
    <!-- <form action="script.php" method="POST">
        <input type="radio" name="mark" value="1">1<br>
        <input type="radio" name="mark" value="2">2<br>
        <input type="radio" name="mark" value="3">3<br>
        <input type="radio" name="mark" value="4" checked>4<br>
        <input type="radio" name="mark" value="5">5<br>
        <input type="submit" value="Отправить">
    </form> -->
    <!--
    Array
    (
        [mark] => 5
    )
    1
    -->

</body>

</html>