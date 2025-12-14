<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.2"?>
    </title>
    <style>
        body {color: white; background-color: black;}
    </style>
</head>

<body>
    <?php
    echo "Текущая дата и время: ";
    echo date(DATE_RSS);
    // Текущая дата и время: Sun, 14 Dec 2025 20:19:15 +0700
    ?>

    <br>

    <?php
    echo 9
    +
    3
    -
    4;
    echo "текст";
    ?>
    <!-- Текущая дата и время: Sun, 14 Dec 2025 20:35:36 +0700 8текст -->

    <br>

    <?php
    if(mt_rand(0,1)){
         ?>
         <div style="color: blue; background-color: white;">Синий текст</div>
         <?php
    } else {
        ?>
         <div style="color: red; background-color: white;">Красный текст</div>
        <?php
    }
    ?>

</body>

</html>