<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Admin home_page</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- fontawesome cdn -->
    <script src="https://kit.fontawesome.com/974041eb6f.js" crossorigin="anonymous"></script>
    <!-- css styling  -->
    <link rel="stylesheet" href="admin_style.css">
</head>

<?php

session_start();
if(!$_SESSION['admin']){
header("location:form/login.php");
}

?>


<body>



<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand logo"><i class="fa fa-shopping-basket"></i> eGroco</a>
    
    <span class="admin-controls">
    <i class="fa fa-user-shield"></i>
       <h2>Hello, <?php echo $_SESSION['admin']; ?> |</h2> 
        <i class="fas fa-sign-out-alt"></i>
        <a href="form/logout.php">Logout</a>
        <a href="../user/header.php">UserPanel</a>
    </span>
    
  </div>
</nav>

<div>
    <h2 class = "heading text-center dashboard">My <span>Dashboard</span></h2>
</div>
<div class= "text-center post-product">
    <a href="./product/index.php" class= "btn plr" px-5>Add Post</a>
    <a href="" class="btn plr" px-5>Your Users</a>
</div>
    
</body>
</html>