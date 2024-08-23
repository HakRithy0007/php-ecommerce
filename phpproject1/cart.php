<?php

session_start();

if(isset($_POST['add_to_cart'])){

    // if user has already added a product to cart
    if(isset($_SESSION['cart'])){

      $products_array_ids = array_column($_SESSION['cart'],'product_id'); //[2,3,4,10,15]
    
        //if product has already been added to cart or not
          if(!in_array($_POST['product_id'], $products_array_ids)){

            $product_id = $_POST['product_id'];
            

              $product_array = array(
                              'product_id' => $_POST['product_id'],
                              'product_name' => $_POST['product_name'],
                              'product_price' => $_POST['product_price'],
                              'product_image' => $_POST['product_image'],
                              'product_quantity' => $_POST['product_quantity']
            );
            $_SESSION['cart'] [$product_id] = $product_array;


          //product has already been added
          }else{

        echo '<script>alert("Product was already to cart");</script>';

          }

      //if this is the first product
    }else{
      $product_id = $_POST['product_id'];
      $product_name = $_POST['product_name'];
      $product_price = $_POST['product_price'];
      $product_image = $_POST['product_image'];
      $product_quantity = $_POST['product_quantity'];

      $product_array = array(
                      'product_id' => $product_id,
                      'product_name' => $product_name,
                      'product_price' => $product_price,
                      'product_image' => $product_image,
                      'product_quantity' => $product_quantity
      );
      
      $_SESSION['cart'][$product_id] = $product_array;
      // [  2=>[] , 3=>[] , 5=>[]    ]

      
    }
    //calculate total
    calulateTotalCart();

  //remove product form cart
}else if(isset($_POST['remove_product'])){

    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]);

    //calculate total
    calulateTotalCart();

}else if( isset($_POST['edit_quantity'])){

    //we get id and quantity form the form
    $product_id = $_POST['product_id'];
    $product_quantity = $_POST['product_quantity'];

    //get the product array from the session
    $product_array = $_SESSION['cart'][$product_id];

    //update product quantity
    $product_array['product_quantity'] = $product_quantity;

    //return array back its place
    $_SESSION['cart'][$product_id] = $product_array;

    //calculate total
    calulateTotalCart();


}else{
    // header('locaion: index.php');
}

  function calulateTotalCart(){

    $total = 0;
    
    foreach($_SESSION['cart'] as $key => $value){

      $product = $_SESSION['cart'][$key];

      $price = $product['product_price'];
      $quantity = $product['product_quantity'];

      $total = $total + ($price * $quantity);
      
    }

    $_SESSION['total'] = $total;
  }

?>


<?php include('layouts/header.php') ?>

    <!-- cart -->
    <section class="cart container my-5 py-5">
        <div class="container mt-5">
          <h3 class="text-center mt-5 mb-5">Your Cart</h3>
            <hr>
        </div>

        <table class="mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>

            <?php if(isset($_SESSION['cart'])) { ?>


            <?php  foreach($_SESSION['cart'] as $key => $value){ ?>


            <tr>
                <td>
                    <div class="product-info">
                        <img src="assets/image/<?php echo $value['product_image']; ?>" alt="">
                        <div>
                            <p><?php echo $value['product_name'];?></p>
                            <small><span>$</span><?php echo $value['product_price']; ?></small>
                            <br>
                            <form method="POST" action="cart.php" >
                              <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                              <input type="submit" name="remove_product" class="remove-btn" value="remove" >
                            </form>
                            
                        </div>
                    </div>                  
                </td>
                <td>
                    
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="product_id" value="<?php echo $value['product_id']; ?>">
                        <input type="number" name="product_quantity" value="<?php echo $value['product_quantity']; ?>">
                        <input type="submit" class="edit-btn" value="Edit" name="edit_quantity">
                    </form>
                    
                </td>
                <td>
                    <span>$</span>
                    <span class="product-price"><?php echo $value['product_quantity'] * $value['product_price']; ?></span>
                </td>
            </tr>

            <?php } ?>

            <?php } ?>
            
        </table>

        <div class="cart-total">
          <table>
            <!-- <tr>
              <td>Subtotal</td>
              <td>$199</td>
            </tr> -->
            <tr>
              <td>Total</td>
              <?php if(isset($_SESSION['cart'])) { ?>

              <td>$<?php echo $_SESSION['total']; ?></td>

              <?php } ?>
            </tr>
          </table>
        </div>
        
        <div class="checkout-container">
        <form action="checkout.php" method="POST">
          <input type="submit" class="btn checkout-btn" value="Checkout" name="checkout" style="background-color: rgb(255, 175, 3); font-weight: bold; color:white;">
        </form>
        </div>
      


    </section>





<?php include('layouts/footer.php') ?>