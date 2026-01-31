<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 6.3" ?>
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
    // 6.3 Функции для работы с HTML

    // https://www.php.net/manual/ru/function.nl2br.php
    // nl2br (new line to br) — Вставляет HTML-код разрыва строки перед каждым переводом строки

    $str1 = "text\nhello\nphp";
    echo $str1;
    echo "<br><br>";
    // text hello php (в строку)

    echo nl2br($str1);
    echo "<br><br>";
    // text
    // hello
    // php
    // каждая строка на новой строке

    ?>

    <!--
    htmlspecialchars — Преобразовывает специальные символы в HTML-сущности
    https://www.php.net/manual/ru/function.htmlspecialchars.php
    -->
    <form action="handler.php" method="post">
        Сообщение: <br>
        <textarea name="msg" cols="50" rows="5"></textarea><br>
        <input type="submit" value="Добавить">
    </form>

    <!--  вводим в поле следующий текст:
    <script>alert("Сайт взломан")</script>
    -->

    <!-- ********************* -->
    <!-- strip_tags — Удаляет HTML- и PHP-теги из строки
    strip - раздевать, лишать
    -->
    <!-- https://www.php.net/manual/ru/function.strip-tags.php -->
    <?php
    $str2 = '<p>Обычный текст</p><br>
            <b>Жирный текст</b>';
    echo htmlspecialchars(strip_tags($str2));
    // Обычный текст Жирный текст
    // без HTML тегов
    echo "<br>";

    echo htmlspecialchars(strip_tags($str2, '<p>'));
    // <p>Обычный текст</p> Жирный текст
    // здесь мы через запятую передали тег который не хотим удалять

    ?>


</body>

</html>