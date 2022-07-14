<?php

require_once '../connect/db.php';

 $id = $_GET["id"];

 $product  = mysqli_query($db , "SELECT * FROM `products` WHERE id = $id;");

if (mysqli_num_rows($product) === 0) {
    die("Такого продукта не существует");
}

$product = mysqli_fetch_assoc($product);

?>

<form action="product_remove.php" method="post">
    <input type="hidden" name="id" value="<?= $product["id"] ?>">
    <img src="<?= "../".$product["image"] ?>" width="200">
    <h3>Вы действительно хотите удалить <?= $product["title"]?>?</h3>
    <button type="submit">Подтверждаю</button>
</form>
<a href="/">Вернуться назад</a>
