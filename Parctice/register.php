<?php
include "functions/functions.php";
register();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="jQuery/main.js"></script>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js" ></script>
</head>
<body class=" d-flex justify-content-center rounded overflow-scroll bg-light">

    <div class=" container" style=" width:800px;">

        <div class=" card mx-lg-5 mx-sm-0 mt-5 border-0 rounded-5 shadow pb-4 bg-white">

            <div class=" card-body">

                <div class=" text-center mt-3 mb-3">

                    <h1 class=" text-success">Register Area</h1>

                </div>

                <form action="register.php" method="post" class="row mx-lg-5 mx-sm-0">

                    <div class="col-sm-12 mt-3 text-center d-none" id="confirmation_container">
                        <div class="border-0 shadow-sm py-2 text-white rounded-3 px-3" id="confirmation_text"></div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label for="fname" class=" form-label">Full Name *</label>
                        <input class=" form-control" type="text" maxlength="50" name="fname" placeholder="Full Name" id="fname">
                        <div class=" invalid-feedback for_fname">
                        Invalid full name!
                        </div>
                    </div>
                    
                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label for="username" class=" form-label">Username *</label>
                        <input class=" form-control" type="text" maxlength="20" name="username" placeholder="Username" id="username">
                        <div class=" invalid-feedback for_username">
                        Invalid Username!
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label for="mobile_number" class=" form-label">Mobile Number </label>
                        <input class=" form-control" type="number"  name="mobile_number" placeholder="Mobile Number (Optional)" id="mobile_number">
                        <div class=" invalid-feedback for_mobile_number">
                        Invalid mobile number!
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label for="email" class=" form-label">Email Address</label>
                        <input class=" form-control" type="email" maxlength="50" name="email" placeholder="Email Address (Optional)" id="email">
                        <div class=" invalid-feedback for_email">
                        Invalid email!
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label for="password" class=" form-label">Password *</label>
                        <input class=" form-control" type="password" maxlength="20" name="password" placeholder="Password" id="password">
                        <div class=" invalid-feedback for_password">
                        Invalid password!
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                        <label for="confirm_password" class=" form-label">Confirm Password *</label>
                        <input class=" form-control" type="text" maxlength="20" name="confirm_password" placeholder="Confirm Password" id="confirm_password">
                        <div class=" invalid-feedback for_confirm_password">
                        Invalid password confirmation!
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 mt-3">
                    <button type="button" class="btn btn-success" name="submit" id="submit">Submit</button>
                    </div>
                    
                    <div class="col-lg-6 col-sm-12 mt-3 text-lg-end text-sm-start">
                        <a type="button" class="btn btn-primary" name="login"  href="login.php">Login</a>
                    </div>

                </form>

            </div>

        </div>


    </div>
    
    <script src="JQuery/validation.js"></script>
    
</body>
</html>