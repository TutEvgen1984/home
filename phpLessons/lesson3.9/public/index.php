<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= "php - урок 3.9" ?>
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
  // 3.9 Чтение из файла и запись в файл
  // Чтение из файла и запись в файл на языке PHP возможна в отличии от JavaScript. Так как PHP является серверным языком он имеет доступ к файловой системе и позволяет нам работать с файлами. читать, создавать, записывать, удалять файлы. Работа с документацией это очень важный момент при изучении любого языка программирования и в этом уроке мы рассмотрим несколько функций из документации в том числе и получение текущей даты и времени на языке php.
  // https://www.php.net/manual/ru/function.file-get-contents.php
  // https://www.php.net/manual/ru/function.file-put-contents.php
  // https://www.php.net/manual/ru/function.date.php

  $homepage = file_get_contents("text1.txt");
  echo $homepage;
  // Новый текстовый документ Вторая строка

  //  добавим к существующей переменной дополнительный текст с помощью торчки (+= не работает, будет ошибка)
  $homepage .= "\n\tЕще одна строка";
  // \n -  это новая строка (работает только внутри двойных кавычек)
  // \t -  это табуляция.  она будет показаны в виде 4- пробелов в просмотровщике внутри VS code (которе можно изменить например на 2)

  $date = date("Y-m-d H-i-s");
  file_put_contents("text2.txt", $homepage);
  file_put_contents("$date.txt", $homepage);

  ?>

</body>

</html>