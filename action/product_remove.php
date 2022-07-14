<?php

require_once '../connect/db.php';

$id = $_POST["id"];

$query = mysqli_query($db , "DELETE FROM products WHERE `products`.`id` = $id");

die ($query ? "product is delete" : "product is not delete");
