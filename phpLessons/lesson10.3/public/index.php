<?php
// подключаемся к базе данных
require_once 'config/connect.php';
// $connect записана в connect.php, эта переменная далее будет использоваться
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Товары</title>
</head>

<body>
  <table>
    <tr>
      <th>id</th>
      <th>Название</th>
      <th>Цена</th>
      <th>Описание</th>
      <th>&#9672;</th>
      <th>&#9998;</th>
      <th>&#10006;</th>
    </tr>

    <?php
    // запрос на получение всей таблицы имеющей название `items`
    $products = mysqli_query($connect, "SELECT * FROM `items`");
    // у функции mysqli в конце стоит i, которая означает improve - улучшенная функция

    echo "var_dump(\$products)<br>";
    var_dump($products);
    // object(mysqli_result)#2 (5) { ["current_field"]=> int(0) ["field_count"]=> int(4) ["lengths"]=> NULL ["num_rows"]=> int(3) ["type"]=> int(0) }

    echo "<br><br>";

    // выведем через print_r() (это не очень наглядно)
    // https://www.php.net/manual/ru/mysqli-result.fetch-all.php
    $products = mysqli_fetch_all($products);
    echo "print_r(\$products)<br>";
    print_r($products);
    // Array ( [0] => Array ( [0] => 10 [1] => Товар 1 [2] => Описание товара 1 [3] => 500 ) [1] => Array ( [0] => 12 [1] => Товар 2 [2] => Описание товара 2 [3] => 700 ) [2] => Array ( [0] => 13 [1] => Товар 3 [2] => Описание товара 3 [3] => 900 ) )

    echo "<br><br>";

    // выведем через <pre> перед print_r() (более наглядный вид)

    echo "<pre>";
    print_r($products);
    echo "</pre>";

    //     Array
    // (
    //     [0] => Array
    //         (
    //             [0] => 10
    //             [1] => Товар 1
    //             [2] => Описание товара 1
    //             [3] => 500
    //         )

    //     [1] => Array
    //         (
    //             [0] => 12
    //             [1] => Товар 2
    //             [2] => Описание товара 2
    //             [3] => 700
    //         )

    //     [2] => Array
    //         (
    //             [0] => 13
    //             [1] => Товар 3
    //             [2] => Описание товара 3
    //             [3] => 900
    //         )

    // )

    foreach ($products as $product) {
    ?>
      <tr>
        <td><?= $product[0] ?></td>
        <td><?= $product[1] ?></td>
        <td><?= $product[2] ?></td>
        <td><?= $product[3] ?></td>
        <td><a href="product.php?id=<?= $product[0] ?>">Просмотр</a></td>
        <td><a href="update.php?id=<?= $product[0] ?>">Обновить</a></td>
        <td><a href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
      </tr>
    <?php
    }
    ?>
  </table>

  <h2>Добавить новый товар</h2>
  <form action="vendor/create.php" method="post">
    <p>Название</p>
    <input type="text" name="title">
    <p>Описание</p>
    <textarea name="description"></textarea>
    <p>Цена</p>
    <input type="number" name="price">
    <button type="submit">Добавить</button>
  </form>

</body>

</html>