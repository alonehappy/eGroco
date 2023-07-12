<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Small Header</title>
    <!-- font-awesome link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="header.css">
    
</head>

<body>
    <?php 
    @include 'config.php';
    $select_rows = mysqli_query($con,"SELECT * FROM `addcart`") or die('query failed');
    $row_count = mysqli_num_rows($select_rows);
    ?>

    <!-- header section starts  here-->

    <header class="header">
        <a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>eGroco</a>
        <nav class="navbar">
            <a href="header.php">Home</a>
            <a href="header.php#features">Features</a>
            <a href="header.php#products">Products</a>
            <a href="header.php#categories">Categories</a>
            <a href="header.php#review">Review</a>
            <a href="header.php#blogs">Blogs</a>
        </nav>
        <div class="icons">
            <div class="fa fa-bars" id="menu-btn"></div>
            <div class="fa fa-search" id="search-btn"></div>
            
            <a href="viewCart.php"><div  class="fa fa-shopping-cart" id="cart-btn"><span><?php echo $row_count;?></span></div></a>
            <div class="fa fa-user users" id="login-btn"></div>
        </div>
        <div class="admin-panel"><a href="../admin/mystore.php">Admin</a></div>

        <!-- search start  -->
        <form class="search-form">
            <input type="search" id="search-box" placeholder="Search Here..." />
            <label for="search-box" class="fa fa-search"></label>
        </form>
        <!-- search ends  -->

        

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

    <script src='header.js'></script>

</body>
</html>