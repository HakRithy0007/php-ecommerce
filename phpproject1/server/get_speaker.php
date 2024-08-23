
<?php

include ('connection.php');

$stmt = $conn -> prepare("SELECT * FROM products WHERE product_category='speaker' LIMIT 4");

$stmt -> execute();

$speaker_products = $stmt -> get_result(); //array

?>
