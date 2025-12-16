<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.4" ?>
    </title>
    <style>
        body {
            color: white;
            background-color: black;
        }
    </style>
</head>

<body>

    <?php
    echo "главный скрипт <br>";
    include 'second.php';
    echo "главный скрипт <br>";
    ?>

</body>

</html>