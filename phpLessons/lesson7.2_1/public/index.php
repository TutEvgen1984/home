<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "7.2 - пример 1" ?>
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
    <!-- 7.2 Передача параметров методом POST -  Пример 1 -->

    <form method="GET" action="">
        <input type="text" name="first"><br>
        <input type="text" name="second"><br>
        <input type="submit" value="Отправить"><br>
    </form>
    <!--  так как action пустой, то после нажатия "submit" браузер передачи данные формы в бегущую страницу, и у нас ниже есть скрипт php для обработки этих данных -->

    <?php

    // empty — Проверяет, пуста ли переменная
    // https://www.php.net/manual/ru/function.empty.php

    // exit — Завершает выполнение текущего скрипта с кодом состояния или сообщением
    // https://www.php.net/manual/ru/function.exit.php

    if (empty($_GET['first']) && empty($_GET['second'])) {
        exit('Текстовые поля не заполнены');
    } else {
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    }
    // вводим в поля Name и FIO и нажимаем Отправить
    // Array
    // (
    //     [first] => Name
    //     [second] => FIO
    // )

    // при этом адресная строка стала:
    // https://phpless7dot2/?first=Name&second=FIO

    // Код переделан чтобы выводить только при обрез заполненных полях
    if (!empty($_GET['first']) && !empty($_GET['second'])) {
        echo "<pre>";
        print_r($_GET);
        echo "</pre>";
    } else {
        exit('Текстовые поля не заполнены');
    }
    // при вводе только одного поля получаем:
    // Array
    // (
    //     [first] => Name
    //     [second] =>
    // )
    // Текстовые поля не заполнены



    ?>

</body>

</html>