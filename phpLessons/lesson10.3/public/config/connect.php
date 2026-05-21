<?php
// $connect = mysqli_connect('localhost', 'root', 'root', 'crud');
$connect = mysqli_connect('MySQL-8.4:3306', 'root', '', 'crud');

if (!$connect) {
  die('Ошибка подключения к БД');
}
