<?php
// $_FILES — Переменные файлов, загруженных по HTTP
// https://www.php.net/manual/ru/reserved.variables.files.php

// Загрузка файлов методом POST
// https://www.php.net/manual/ru/features.file-upload.post-method.php
// evgenfilename должно совпадать с name="evgenfilename" у input на главной странице
if ($_FILES['evgenfilename']['size'] > 3 * 1024 * 1024) {
  exit('Размер файла превышает 3 мегабайта');
  // если сработает exit, то весь код ниже не будет выполняться (ниже и в этом блоке if и дальше по коду php, то есть script.php завершится)
}

// далее то что находится в скобках у if выполнится так как будто это обычный код
if (move_uploaded_file($_FILES['evgenfilename']['tmp_name'], 'temp/' . $_FILES['evgenfilename']['name'])) {
  echo 'Файл успешно загружен';
  echo 'Исходное имя файла - ' . $_FILES['evgenfilename']['name'] . '<br>';
  echo 'Размер файла в байтах - ' . $_FILES['evgenfilename']['size'] . '<br>';
  echo 'MIME тип файла - ' . $_FILES['evgenfilename']['type'] . '<br>';
  echo 'Временный файл, в котором сохранен загруженный файл - ' . $_FILES['evgenfilename']['tmp_name'] . '<br>';
} else {
  echo 'Ошибка загрузки файла';
}
