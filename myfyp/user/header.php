<?php
if (isset($_POST['addCart'])) {
  @include 'config.php';
  $product_name = $_POST['PName'];
  $product_price = $_POST['PPrice'];
  $product_image = $_POST['Pimage'];
  $product_qty = 1;


  $select_cart = mysqli_query($con, "SELECT * FROM `addcart` WHERE name ='$product_name' ");
  if (mysqli_num_rows($select_cart) > 0) {
    echo "
      <script>alert('Product already added to cart')
      window.location.href='header.php';
      </script>;
      ";
  } else {
    $insert_product = mysqli_query($con, "INSERT INTO `addcart`( name, price, image, quantity) VALUES ('$product_name','$product_price','$product_image','$product_qty')");
    echo "
      <script>alert('Product Added successfully')
      window.location.href='header.php';
      
      </script>;
      ";
  }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Long Header</title>
  <!-- font-awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!-- bootstrap cdn  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <link rel="stylesheet" href="header.css">
</head>

<body>


  <?php

  // if(isset($message)){
//   foreach($message as $message){
//     echo '<div class = "message"><span>'.$message.'</span><i class = "fa fa-times" onclick =this.parentElement.style.display = `none`;</i></div>';
//   }
// }
  ?>



  <?php
  // session_start();
// $count = 0;
// if(isset($_SESSION['cart'])){
//     $count = count($_SESSION['cart']);
// }
  @include 'config.php';
  $select_rows = mysqli_query($con, "SELECT * FROM `addcart`") or die('query failed');
  $row_count = mysqli_num_rows($select_rows);
  ?>

  <!-- header section starts  here-->

  <header class="header">
    <a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>eGroco</a>
    <nav class="navbar">
      <a href="#home">Home</a>
      <a href="#features">Features</a>
      <a href="#products">Products</a>
      <a href="#categories">Categories</a>
      <a href="#review">Review</a>
      <a href="#blogs">Blogs</a>
    </nav>
    <div class="icons">
      <div class="fa fa-bars" id="menu-btn"></div>
      <div class="fa fa-search" id="search-btn"></div>
      <a href="viewCart.php">
        <div class="fa fa-shopping-cart" id="cart-btn"><span>
            <?php echo $row_count; ?>
          </span></div>
      </a>
      <div class="fa fa-user users" id="login-btn"></div>
    </div>
    <div class="admin-panel"><a href="../admin/form/login.php">Admin</a></div>

    <!-- search start  -->
    <form class="search-form">
      <input type="search" id="search-box" placeholder="Search Here..." />
      <label for="search-box" class="fa fa-search"></label>
    </form>
    <!-- search ends  -->

    <!-- cart starts here  -->


    <!-- <div class='cart-container'>
            <div class='add-to-cart'>
                <h1>My Cart</h1>
                <div class='cards'>
                    <h3>Product</h3>
                    <h3>Quantity</h3>
                    <h3>Price</h3>
                    <h3>Total</h3>
                </div>
            </div>


            <div class='cart-products'>
                

            </div>



        </div> -->

    <!-- cart ends here  -->

    <!-- user signup/signin start  -->

    <form action="#" class="login-form form">
      <h3>Login Now</h3>
      <i class="fa fa-envelope icons"></i>
      <input type="email" placeholder="Your Email" class="box" />
      <i class="fa fa-lock icons"></i>
      <input type="password" placeholder="Your Password" class="box" />

      <p>Forgot Your Password <a href="#">Click Here</a></p>
      <p>Don't Have An Account<a href="#" id="createIt"> Create Now</a></p>

      <input type="submit" value="Login " class="btn" />
    </form>
    <form action="#" class="register-form form">
      <h3>Registration</h3>
      <i class="fa fa-user icons"></i>
      <input type="Text" placeholder="UserName" class="box" />
      <i class="fa fa-envelope icons"></i>
      <input type="email" placeholder="Your Email" class="box" />
      <i class="fa fa-lock icons"></i>
      <input type="password" placeholder="Your Password" class="box" />

      <p>Forgot Your Password <a href="#">Click Here</a></p>
      <p>Don't Have An Account<a href="#"> Create Now</a></p>

      <input type="submit" value="Register" class="btn" />
    </form>

    <!-- user signup/signin ends  -->
  </header>
  <!-- header section ends  here-->
  <!-- Home Section Start Here  -->

  <section class="home" id="home">
    <div class="content">
      <h3>Fresh And <span>Organic</span> Products For You</h3>
      <p>Organic Food Is Grown Without The Uses Of Synthetic Chemicals, Such As Human Made Pesticides And
        Fertilizers, And Does Not Contain Genetically Modified Organisms (GMOs).</p>
      <a href="#" class="btn">Shop Now</a>
    </div>
  </section>


  <!-- Home Section Ends Here  -->


  <!-- Our features section start here  -->

  <section class="features" id="features">
    <h1 class="heading"> Our <span>Features</span></h1>
    <div class="box-container">
      <div class="box1 box">
        <img src="./fypimg/feature-img-1.png" alt="">
        <h3>Fresh And Organic</h3>

        <p>organic food, fresh or processed food produced by organic farming methods.</p>

        <a href="#" class="btn">Read More</a>
      </div>
      <div class="box1 box">
        <img src="./fypimg/feature-img-2.png" alt="">
        <h3>Delivery Services</h3>

        <p>eGroco Delivery Services Is Much More Better Than Others</p>

        <a href="#" class="btn">Read More</a>
      </div>
      <div class="box1 box">
        <img src="./fypimg/feature-img-3.png" alt="">
        <h3>Easy Payments</h3>

        <p>Payment On Delivery Or By The EasyPaisa, Jazzcash Or Other Cards.</p>

        <a href="#" class="btn">Read More</a>



      </div>
    </div>
  </section>



  <!-- Our features section ends here  -->


  <!-- Our products section starts here  -->
  <section class='products' id='products'>
    <h1 class='heading'>Our <span>Products</span></h1>


    <div class='swiper product-slider'>
      <div class='swiper-wrapper'>


        <?php
        include 'config.php';
        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
        while ($row = mysqli_fetch_array($Record)) {

          $check_page = $row['PCategory'];
          if ($check_page === 'Vegetables') {
            ?>

            <form action='' method='post' class='swiper-slide box' id='vegetables'>
              <input type='hidden' name='Pid' value='<? $row['id']; ?>'>
              <a href='quick_view.php?id=<?= $row['id']; ?>' class='fa fa-eye'></a>
              <img src="../admin/product/<?= $row['Pimage']; ?>">
              <input type='hidden' name='Pimage' value="<?= $row['Pimage']; ?>">
              <h1>
                <?= $row['PName']; ?>
              </h1>
              <input type='hidden' name='PName' value="<?= $row['PName'] ?>">
              <div class='price'>
                <?= $row['PPrice']; ?>./Rs
              </div>
              <input type='hidden' name='PPrice' value='<?= $row['PPrice']; ?>'>

              <div class='stars'>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star-half'></i>
              </div>
              <input class='qty' type='hidden' value=' min = ' 1' max='20' ' name = ' PQty' placeholder='Quantity'>
              <input class='btn add-cart' name='addCart' type='submit' value='Add To Cart'>
            </form>


            <?php


          }
        }
        ?>

      </div>

    </div>

    <div class='swiper product-slider'>
      <div class='swiper-wrapper'>


        <?php
        include 'config.php';
        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");
        while ($row = mysqli_fetch_array($Record)) {

          $check_page = $row['PCategory'];
          if ($check_page === 'Fruits') {
            ?>

            <form action='' method='post' class='swiper-slide box' id='fruits'>
              <input type='hidden' name='Pid' value='<? $row['id']; ?>'>
              <a href='quick_view.php?id=<?= $row['id']; ?>' class='fa fa-eye'></a>
              <img src="../admin/product/<?= $row['Pimage']; ?>">
              <input type='hidden' name='Pimage' value="<?= $row['Pimage']; ?>">
              <h1>
                <?= $row['PName']; ?>
              </h1>
              <input type='hidden' name='PName' value="<?= $row['PName'] ?>">
              <div class='price'>
                <?= $row['PPrice']; ?>./Rs
              </div>
              <input type='hidden' name='PPrice' value='<?= $row['PPrice']; ?>'>

              <div class='stars'>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star'></i>
                <i class='fa fa-star-half'></i>
              </div>
              <input class='qty' type='hidden' value=' min = ' 1' max='20' ' name = ' PQty' placeholder='Quantity'>
              <input class='btn add-cart' name='addCart' type='submit' value='Add To Cart'>
            </form>


            <?php


          }
        }
        ?>

      </div>

    </div>
    </div>
    </div>

  </section>

  <!-- Our products category ends here  -->

  <section class="categories" id="categories">
    <h1 class="heading">Product <span>Categories</span></h1>
    <div class="box-container">
      <div class="box">
        <img src="./fypimg/cat-1.png" alt="">
        <h3>Vegetables</h3>
        <p>Upto 45% Off</p>
        <a href="#vegetables" class="btn">Shop Now</a>
      </div>
      <div class="box">
        <img src="./fypimg/cat-2.png" alt="">
        <h3>Fresh Fruits</h3>
        <p>Upto 45% Off</p>
        <a href="#fruits" class="btn">Shop Now</a>
      </div>
    </div>
  </section>


  <!-- Our products category ends here  -->


  <!-- Our customer's Review starts here -->

  <section class="review" id="review">
    <h1 class="heading">Customer's <span>Review</span></h1>
    <div class="swiper review-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide box">
          <img src="./fypimg/pic-1.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat natus quis nam. Pariatur repellendus
            velit aliquid numquam! Dolores, qui.</p>
          <h3>John Deo</h3>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>

        </div>

        <div class="swiper-slide box">
          <img src="./fypimg/pic-2.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat natus quis nam. Pariatur repellendus
            velit aliquid numquam! Dolores, qui.</p>
          <h3>John Deo</h3>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>

        </div>

        <div class="swiper-slide box">
          <img src="./fypimg/pic-3.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat natus quis nam. Pariatur repellendus
            velit aliquid numquam! Dolores, qui.</p>
          <h3>John Deo</h3>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>

        </div>

        <div class="swiper-slide box">
          <img src="./fypimg/pic-4.png" alt="">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint quaerat natus quis nam. Pariatur repellendus
            velit aliquid numquam! Dolores, qui.</p>
          <h3>John Deo</h3>
          <div class="stars">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half"></i>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- Our customer's Review ends here -->


  <!-- Our Blogs starts here -->

  <section class="blogs" id="blogs">
    <h1 class="heading">Our<span>Blogs</span></h1>

    <div class="box-container">
      <div class="box">
        <img src="./fypimg/blog-1.jpg" alt="">
        <div class="content">
          <div class="icons">
            <a href="#"><i class="fa fa-user"></i>By User</a>
            <a href="#"><i class="fa fa-calendar"></i>1st May 2023</a>
          </div>
          <h3>Fresh And Organic Vegetables And Fruits</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, est!</p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>

      <div class="box">
        <img src="./fypimg/blog-2.jpg" alt="">
        <div class="content">
          <div class="icons">
            <a href="#"><i class="fa fa-user"></i>By User</a>
            <a href="#"><i class="fa fa-calendar"></i>1st May 2023</a>
          </div>
          <h3>Fresh And Organic Vegetables And Fruits</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, est!</p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>

      <div class="box">
        <img src="./fypimg/blog-3.jpg" alt="">
        <div class="content">
          <div class="icons">
            <a href="#"><i class="fa fa-user"></i>By User</a>
            <a href="#"><i class="fa fa-calendar"></i>1st May 2023</a>
          </div>
          <h3>Fresh And Organic Vegetables And Fruits</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, est!</p>
          <a href="#" class="btn">Read More</a>
        </div>
      </div>

    </div>
  </section>



  <!-- Our Blogs ends here -->


  <!-- Our footer section start here-->

  <section class="footer">
    <div class="box-container">
      <div class="box">
        <h3>eGroco <i class="fa fa-shopping-basket"></i></h3>
        <p>Feel Free To Follow Us On Our Social Media Handlers All The Links Are Given Below.</p>

        <div class="shareIt">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>

      <div class="box contact-info">
        <h3> Contact Info</h3>
        <a href="#" class="links"> <i class="fa fa-phone"></i>+923111370146</a>
        <a href="#" class="links"> <i class="fa fa-phone"></i>+923186621146</a>
        <a href="#" class="links"> <i class="fa fa-envelope"></i>ffroman86@gmail.com</a>
        <a href="#" class="links"> <i class="fa fa-map-marker"></i>Jahanian, Pakistan</a>
      </div>

      <div class="box quick-links">
        <h3> Quick Links</h3>
        <a href="#home" class="links"> <i class="fa fa-arrow-right"></i>Home</a>
        <a href="#features" class="links"> <i class="fa fa-arrow-right"></i>Features</a>
        <a href="#products" class="links"> <i class="fa fa-arrow-right"></i>Products</a>
        <a href="#categories" class="links"> <i class="fa fa-arrow-right"></i>Categories</a>
        <a href="#review" class="links"> <i class="fa fa-arrow-right"></i>Review</a>
        <a href="#blogs" class="links"> <i class="fa fa-arrow-right"></i>Blogs</a>

      </div>


      <div class="box">

        <h3>Newsletter</h3>
        <p>Subscribe For Latest Updates</p>
        <input type="email" placeholder="Your Email" class="email">
        <input type="submit" value="Subscribe" class="btn">
        <img src="/fypimg/payment.png" alt="" class="payment-img">
      </div>
    </div>

    <div class="credit">Created By <span>Abdur Rahman</span> | All Right Reserved</div>
  </section>

  <!-- Our footer section ends here -->














  <!-- script   -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <script src='header.js'></script>


</body>

</html>