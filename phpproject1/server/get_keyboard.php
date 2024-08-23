

<?php

include ('connection.php');

$stmt = $conn -> prepare("SELECT * FROM products WHERE product_category='keyboard' LIMIT 4");

$stmt -> execute();

$keyboard_products = $stmt -> get_result(); //array

?>