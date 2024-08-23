<?php

    session_start();

    if(!empty($_SESSION['cart'])   ){

      //let user in


      //send user to home page
    }else{
      header('location: index.php');
    }

?>



  <?php include('layouts/header.php') ?>

    <!-- Checkout -->
     <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
            <h2 class="form-weight-bold">Checkout</h2>
            <hr class="mx-auto">
        </div>
        <div class="mx-auto container">

            <form action="server/place_order.php" id="checkout-form" method="POST">

            <p class="text-center" style="color: red;">

            <?php if(isset($_GET['message'])) { echo $_GET['message']; } ?>
            <?php if(isset($_GET['message'])) { ?>

                 <a href="login.php" class="btn btn-success">Login</a>

            <?php } ?>
        
        
            </p>


                <div class="form-group checkout-small-element">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required>   
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>   
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">Phone Number</label>
                    <input type="tel" class="form-control" id="checkout-phone" name="phone" placeholder="Phone Number" required>   
                </div>

                <div class="form-group checkout-small-element">
                    <label for="">City</label>
                    <input type="text" class="form-control" id="checkout-city" name="city" placeholder="City" required>   
                </div>

                <div class="form-group checkout-large-element">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>   
                </div>

                <div class="form-group checkout-btn-container">
                  <p>Total amout: $ <?php echo $_SESSION['total']; ?></p>
                    <input type="submit" class="btn mt-3" id="checkout-btn" value="Place_Order" name="place_order"  style="background-color: rgb(255, 175, 3); font-weight: bold; color:white;">   
                </div>
            </form>
        </div>
      </section>




  
  <?php include('layouts/footer.php') ?>