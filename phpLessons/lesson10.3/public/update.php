<!-- этот файл update который в корне сайта будет выводить форму с предварительно заполненными полями -->
<!-- vendor\update.php (другой файл) будет выполнять сам функционал обновления в базе данных -->

<?php
require_once 'config/connect.php';
$product_id = $_GET['id'];
$product = mysqli_query($connect, "SELECT * FROM `items` WHERE `id`='$product_id'");
print_r($product);
// mysqli_result Object ( [current_field] => 0 [field_count] => 4 [lengths] => [num_rows] => 1 [type] => 0 )
echo "<br>";

$product = mysqli_fetch_assoc($product);

print_r($product);
// Array ( [id] => 10 [title] => Товар 1 [description] => Описание товара 1 [price] => 500 )
// fetch_assoc дает массив с именованными АССОЦИАТИВНЫМИ ключами
// fetch_array даст массив с простыми нумерованными ключами в виде цифр. в этом различие этих двух способов
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Обновление товара</title>
</head>

<body>

  <a href="/">Главная</a>
  <hr>

  <h2>Обновить товар</h2>
  <form action="vendor/update.php" method="post">

    <!-- скрытое поле, которое незаметно отправит id в переменную $_POST -->
    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    <p>Название</p>
    <input type="text" name="title" value="<?= $product['title'] ?>">
    <p>Описание</p>
    <textarea name="description"><?= $product['description'] ?></textarea>
    <p>Цена</p>
    <input type="number" name="price" value="<?= $product['price'] ?>">
    <button type="submit">Обновить</button>
  </form>

</body>

</html>