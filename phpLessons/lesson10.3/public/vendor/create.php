<?php
// подключим соединение с базой данных
require_once '../config/connect.php';

print_r($_POST);
// Array ( [title] => 111 [description] => 222 [price] => 333 )

$title = $_POST['title'];
// это означает - взять из глобального массива $_POST, в котором содержатся именованные значения, взять значение которое записано в именном ключе 'title'
// в свою очередь именованный ключ совпадает с атрибутом name у формы <input type="text" name="title">

$description = $_POST['description'];
$price = $_POST['price'];

// запрос на добавление  наших трех переменных в базу данных
mysqli_query($connect, "INSERT INTO `items` (`id`, `title`, `description`, `price`) VALUES (NULL, '$title', '$description', '$price')");
// первое значение у нас NULL для того чтобы идентификатор подставился автоматически

// переадресация https://www.php.net/manual/ru/function.header.php
header('Location: /');
// это для того чтобы после выполнения этого скрипта перейти на главную страницу
// 'Location: /' означает перейти в родительскую директорию, это тоже самое что 'Location: ../index.php'