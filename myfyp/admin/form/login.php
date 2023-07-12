<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="">
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-md-6 shadow m-auto bg-white p-3 border border-success mt-3">
                <form action="login1.php" method="POST">
                    <div class="mb-3 head">
                        <h2 class="text-center fw-bold fs-3 text-success">Admin Login</h2>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter User Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="userpassword" class="form-control" placeholder="Enter User Password">
                    </div>

                    <button class="bg-success fs-4 fw-bold my-3 form-control text-white">Login</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>