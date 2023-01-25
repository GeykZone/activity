<?php
include "functions/functions.php";
index()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['fname'] ?></title>
    <script src="jQuery/main.js"></script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js" ></script>
</head>
<body  class=" d-flex justify-content-center rounded overflow-scroll bg-light">

    <div class=" container" style=" width:800px;">

        <div class=" card mx-lg-5 mx-sm-0 mt-5 border-0 rounded-5 shadow pb-4 bg-white">

            <div class=" card-body">

                <div class=" text-center mt-3 mb-3">
                    <h1 class=" text-success">Welcome <?php echo $_SESSION['username'] ?></h1>
                </div>

                <form action="index.php" method="post" class="row mx-lg-5 mx-sm-0">


                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label class=" form-label">Full Name:</label>
                        <div class=" bg-light border-0 shadow-sm py-2 rounded-3 px-3"><?php echo $_SESSION['fname'] ?></div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label class=" form-label">Username:</label>
                        <div class=" bg-light border-0 shadow-sm py-2 rounded-3 px-3"><?php echo $_SESSION['username'] ?></div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label class=" form-label">Mobile Number:</label>
                        <div class=" bg-light border-0 shadow-sm py-2 rounded-3 px-3"><?php echo $_SESSION['mobile'] ?></div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label class=" form-label">Email:</label>
                        <div class=" bg-light border-0 shadow-sm py-2 rounded-3 px-3"><?php echo $_SESSION['email'] ?></div>
                    </div>

                    <div class="col-sm-12 mt-4 text-lg-end text-sm-start">
                    <button type="button" class="btn btn-danger" name="logout" id="logout">Logout</button>
                    </div>

                </form>
                
            </div>

        </div>

    </div>
    <script src="JQuery/validation.js"></script>
</body>
</html>