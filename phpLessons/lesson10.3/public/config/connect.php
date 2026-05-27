<?php
// $connect = mysqli_connect('localhost', 'root', 'root', 'crud');
// Соединяемся с базой данных с автоматическим вводом логина и пароля
$connect = mysqli_connect('MySQL-8.4:3306', 'root', '', 'crud');

if (!$connect) {
  die('Ошибка подключения к БД');
}

// https://www.php.net/manual/ru/function.die.php
// die — Псевдоним функции exit()
// exit — Завершает выполнение текущего скрипта с кодом состояния или сообщением