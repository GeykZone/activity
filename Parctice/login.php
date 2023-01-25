<?php
include "functions/functions.php";
login()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="jQuery/main.js"></script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js" ></script>
</head>
<body class=" d-flex justify-content-center rounded overflow-scroll bg-light">

<div class=" container" style="width: 800px;">

    <div class=" card mx-lg-5 mx-sm-0 mt-5 border-0 shadow rounded-5 bg-white pb-4">

        <div class=" card-body">
            
            <div class="text-center mt-3 mb-3">

                <h1 class="text-success">Login Area</h1>

            </div>
            
            <form action="login.php" method="post" class="row mx-lg-5 mx-sm-0">

                <div class="col-sm-12 mt-3 mb-3 text-center d-none" id="confirmation_container">
                    <div class="border-0 shadow-sm py-2 text-white rounded-3 px-3" id="confirmation_text"></div>
                </div>

                <div class="col-12">
                    <label for="username" class=" form-label">Username *</label>
                    <input class=" form-control" type="text" name="username" placeholder="Username" id="username">
                    <div class=" invalid-feedback for_username">
                    Invalid username!
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <label for="password" class=" form-label">Password *</label>
                    <input class=" form-control" type="password" name="password" placeholder="password" id="password">
                    <div class=" invalid-feedback for_password">
                    Invalid password!
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 mt-3">
                    <button type="button" class="btn btn-primary" name="login" id="login">Login</button>
                </div>
                
                <div class="col-lg-6 col-sm-12 mt-3 text-lg-end text-sm-start">
                    <a type="button" class="btn btn-warning" name="register" href="register.php">Register</a>
                </div>

            </form>

        </div>

    </div>

</div>

<script src="jQuery/validation.js"></script>
    
</body>
</html>