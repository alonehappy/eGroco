<?php
include 'config.php';

session_start();


$id = '';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
;
?>

// Add to cart

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
      window.location.href='header.php#products';
      </script>;
      ";
  } else {
    $insert_product = mysqli_query($con, "INSERT INTO `addcart`( name, price, image, quantity) VALUES ('$product_name','$product_price','$product_image','$product_qty')");
    echo "
      <script>alert('Product Added successfully')
      window.location.href='viewCart.php';
      
      </script>;
      ";
  }
}
?>



// Add to cart

// if(isset($_SESSION['Pid'])){
// $pid = $_SESSION['Pid'];
// }else{
// $pid = '';
// };


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quick View</title>
  <link rel="stylesheet" href="header.css">
  <!-- font-awesome link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

  <?php include 'headerSmall.php' ?>

  <section class="quick-view">
    <?php
    $sql_query = "SELECT * FROM `tblproduct` WHERE id = $id";
    $result = $con->query($sql_query);


    ?>
    <h1 class="heading">quick view</h1>
    <?php
    if ($result->num_rows > 0) {
      while ($row = $result->FETCH_ASSOC()) {
        ?>
        <form action="" method="post" class="box">
          <input type="hidden" name="Pid" value="<?= $row['id']; ?>">
          <input type="hidden" name="PName" value="<?= $row['PName']; ?>">
          <input type="hidden" name="PPrice" value="<?= $row['PPrice']; ?>">
          <input type="hidden" name="Pimage" value="<?= $row['Pimage']; ?>">
          <div class="row">
            <div class="image-container">
              <div class="main-image">
                <img src="../admin/product/<?= $row['Pimage']; ?>">
              </div>
            </div>
            <div class="content">
              <div class="name">
                <?= $row['PName']; ?>
              </div>
              <div class="flex">
                <div class="price"><span>Rs</span>
                  <?= $row['PPrice']; ?><span>/-</span>
                </div>
                <!-- <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1"> -->
              </div>
              <div class="details">
                <?= $row['PDesc']; ?>
              </div>
              <div class="flex-btn">
                <input type="submit" value="add to cart" class="btn" name="addCart">
              </div>
            </div>
          </div>
        </form>

        <?php
      }
    }
    ?>

    </div>

  </section>

  <?php include 'footerSmall.php' ?>

</body>

</html>