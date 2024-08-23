
<?php

    include ('connection.php');

    $stmt = $conn -> prepare("SELECT * FROM products WHERE product_category='desktop' LIMIT 4");

    $stmt -> execute();

    $desktop_products = $stmt -> get_result(); //array


?>

