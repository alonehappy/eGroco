

<?php

if(isset($_POST['submit'])){
    include 'config.php';
    $product_name = $_POST['Pname'];
    $product_price = $_POST['Pprice'];
    $product_image = $_FILES['Pimage'];

    $image_loc = $_FILES['Pimage']['tmp_name'];
    $image_name = $_FILES['Pimage']['name'];

    $img_des = "Uploadimage/".$image_name;
    move_uploaded_file($image_loc,"Uploadimage/".$image_name);
    $product_desc = $_POST['Pdesc'];
    $product_category = $_POST['pages'];

    
    // insert products 

    mysqli_query($con, "INSERT INTO `tblproduct`(`PName`, `PPrice`, `Pimage`, `PDesc`, `PCategory`) VALUES ('$product_name','$product_price','$img_des','$product_desc','$product_category')");

    header("location:index.php");

}

?>