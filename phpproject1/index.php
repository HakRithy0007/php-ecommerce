

<?php include('layouts/header.php') ?>



    
      <!-- home -->
    <section id="home">
        <div class="container">
            <h5>ផលិតផលថ្មីៗ</h5>
            <h1>វិសាលភាពនឹងការរចនា ថ្មីៗ.</h1>
            <p>ហាងឈានមុខគេបំផុតក្នុងប្រទេសកម្ពុជា.</p>
            <a href="shop.php" class="btn btn-primary mt-2 px-5 py-2">SHOP NOW</a>
        </div>
    </section>

    <!-- brand -->
    <section id="brand">
      <div class="row">
        <img class=" img-fluid col-lg-3 col-md-6 col-sm-12 mt-5" src="assets/image/brand1.jpg" alt="">
        <img class=" img-fluid col-lg-3 col-md-6 col-sm-12 mt-5" src="assets/image/brand2.jpg" alt="">
        <img class=" img-fluid col-lg-3 col-md-6 col-sm-12 mt-5" src="assets/image/brand3.webp" alt="">
        <img class=" img-fluid col-lg-3 col-md-6 col-sm-12 mt-5" src="assets/image/brand4.jpg" alt="">
      </div>
    </section>

    <!-- new -->
    <section id="new" class="w-100">
        <div class="row p-0 m-0 mt-5">
            <!-- one -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/image/new.jpg" alt="">
                <div class="details">
                    <h5>Product ថ្មីក្ដៅៗ.</h5>
                    <a href="shop.php" class="btn btn-primary mt-2">SHOP NOW</a>
                </div>
            </div>

            <!-- two -->
            <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/image/new.jpg" alt="" >
                <div class="details">
                <h5>Product ថ្មីក្ដៅៗ.</h5>
                    <a href="shop.php" class="btn btn-primary mt-2">SHOP NOW</a>
                </div>
            </div>

             <!-- three -->
             <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class="img-fluid" src="assets/image/new.jpg" alt="" >
                <div class="details">
                <h5>Product ថ្មីក្ដៅៗ.</h5>
                    <a href="shop.php" class="btn btn-primary mt-2">SHOP NOW</a>
              </div>
          </div>


  
        </div>
    </section>

    <!-- featured -->
    <section id="featured" class="my-5 pb-5">
      <div class="container text-center  mt-5 py-5 ">
        <h3>Our Featured</h3>
        <hr>
        <p>Our feature here you can check :</p>
      </div>
      <div class="row mx-auto container-fluid">


        <?php include('server/get_featured_products.php'); ?>

        <?php while($row = $featured_products->fetch_assoc()){  ?>


        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/image/<?php echo $row['product_image']; ?>" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <h5 class="p-name"> <?php echo $row['product_name']; ?> </h5>
          <h4 class="p-price"> $ <?php echo $row['product_price'];  ?> </h4>
          <a href="<?php echo "single_product.php?product_id=" .$row['product_id']; ?> "><button class="buy-btn">Buy Now</button></a>
        </div>

        <?php } ?>

      </div>
    </section>

    <!-- banner -->
    <section id="banner" class="my-5 py-5">
      <div class="container">
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas.</h4><br>
        <h1>Lorem ipsum dolor sit amet.</h1> <br>Lorem, ipsum dolor. <br><br>
        <a href="shop.php" class="btn btn-primary mt-2">SHOP NOW</a>
      </div>
    </section>

    <!-- speaker -->
    <section id="speaker" class="my-5">
      <div class="container text-center  mt-5 py-5 ">
        <h3>Our Speaker</h3>
        <hr>
        <p>Our speaker here you can check :</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php include('server/get_speaker.php'); ?>

      <?php while($row = $speaker_products->fetch_assoc()){  ?>


        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/image/<?php echo $row['product_image']; ?>" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <h5 class="p-name"> <?php echo $row['product_name'];  ?>  </h5>
          <h4 class="p-price"> $ <?php echo $row['product_price']; ?> </h4>
          <a href="<?php echo "single_product.php?product_id=" .$row['product_id']; ?> "><button class="buy-btn">Buy Now</button></a>
        </div>


        <?php }  ?>


      </div>
    </section>

    <!-- desktop -->
    <section id="desktop" class="my-5">
      <div class="container text-center  mt-5 py-5 ">
        <h3>Our Desktop</h3>
        <hr>
        <p>Our desktop here you can check :</p>
      </div>
      <div class="row mx-auto container-fluid">

      <?php  include ('server/get_desktop.php'); ?>

      <?php while($row = $desktop_products->fetch_assoc()){  ?>


        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/image/<?php echo $row['product_image']; ?>" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$ <?php echo $row['product_price']; ?> </h4>
          <a href="<?php echo "single_product.php?product_id=" .$row['product_id']; ?> "><button class="buy-btn">Buy Now</button></a>
        </div>

        <?php }   ?>

      </div>
    </section>

    <!-- keyboard -->
    <section id="keyboard" class="my-5">
      <div class="container text-center  mt-5 py-5 ">
        <h3>Our keyboard</h3>
        <hr>
        <p>Our keyboard here you can check :</p>
      </div>
      <div class="row mx-auto container-fluid">


      <?php include('server/get_keyboard.php'); ?>

      <?php while($row = $keyboard_products->fetch_assoc()){   ?>


        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/image/<?php echo $row['product_image']; ?>" alt="">
          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>

          <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
          <h4 class="p-price">$<?php echo $row['product_price']; ?></h4>
          <a href="<?php echo "single_product.php?product_id=" .$row['product_id']; ?> "><button class="buy-btn">Buy Now</button></a>
        </div>

        <?php }   ?>

      </div>
    </section>


    <?php include('layouts/footer.php') ?>

