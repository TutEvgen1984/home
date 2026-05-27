<?php
require_once '../config/connect.php';

$id = $_POST['id'];
// id в $_POST появилась благодаря скрытому полю содержащему число id

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `items` SET `title` = '$title', `price` = '$price', `description` = '$description' WHERE `items`.`id` = '$id'");

header('Location: /');
