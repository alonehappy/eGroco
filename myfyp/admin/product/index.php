<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- css styling  -->
    <link rel="stylesheet" href="index.css">
    <title>Product Page</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="insert.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 head">
                        <h2 class="text-center fw-bold fs-3 text-success">Product Details</h2>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" name="Pname" class="form-control" placeholder="Enter Product Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Product Price</label>
                        <input type="text" name="Pprice" class="form-control" placeholder="Enter Product Price">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Image</label>
                        <input type="file" name="Pimage" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Product Description</label>
                        <input type="text" name="Pdesc" class="form-control" placeholder="Type Here...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Page</label>
                        <select class="form-select" name="pages">
                            <option selected>Open this select menu</option>
                            <option value="Fruits">Fruits</option>
                            <option value="Vegetables">Vegetables</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-success fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">

                <table class="table border border-success table-hover border my-5">

                    <thead class='text-center font=monospace fs-5'>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Delete</th>


                    </thead>

                    <tbody class="text-center">

                        <?php
                        include 'config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

                        while ($row = mysqli_fetch_array($Record))

                            echo "
    <tr>
        <td>$row[PName]</td>
        <td>$row[PPrice]</td>
        <td><img src ='$row[Pimage]' height = '150px' width ='180px'></td>
        <td class='text-center'>$row[PDesc]</td>
        <td class ='fs-30px'>$row[PCategory]</td>
        <td><a href='' class='btn delete-btn'><i class='fa fa-trash'></i>Remove</a></td>
    </tr>
    
    ";



                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>