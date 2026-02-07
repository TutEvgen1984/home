<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content='width=device-width, initial-scale=1.0'>
    <title>php - урок 7.4</title>
    <style>
        body {
            color: white;
            background-color: black;
            font-size: 36px;
        }

        img {
            width: 150px;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <img src="lesson50.png" alt="">
    Форма для загрузки файлов<br>
    <form action="script.php" method="POST" enctype="multipart/form-data">
        <!-- Название элемента input определяет название элемента в суперглобальном массиве $_FILES -->
        <input type="file" name="evgenfilename">
        <input type="submit" value="Отправить">
    </form>
</body>

</html>