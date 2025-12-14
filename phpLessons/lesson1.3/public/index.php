<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= "php - урок 1.3"?>
    </title>
    <style>
        body {color: white; background-color: black;}
    </style>
</head>

<body>
    <!-- Комментарий html -->
    <?php
    echo "Строка 1";
    // Это однострочный комментарий в стиле языка C++ . Классический однострочный комментарий. (не будет работать вне php кода)
    echo "Строка 2"; # Это комментарий в стиле Unix-оболочки. Однострочный комментарий в стиле Python. (не будет работать вне php кода)
    /* Это многострочный комментарий
   ещё одна строка комментария (не будет работать вне php кода) */
    // echo "Строка 3";
    # echo "Строка 3";
    ?>

</body>

</html>