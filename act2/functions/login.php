<?php
session_start();
include 'functions/connection.php';
$conn = dbConnect();
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $username = ucwords($username);//to make evry first leeter capitalize//
    $password = $_POST['password'];

    $sql= "SELECT * FROM `accounts` WHERE `username` = '$username'";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0)
    {

        while($row = $result->fetch_assoc())
        {
            $pass = $row['password'];
            $id = $row['account_id'];
            if($password = $pass)
            {
               

                $sql2= "SELECT * FROM `users` WHERE `account_id` = '$id'";
                    $result2 = $conn->query($sql2);
                
                    if ($result2->num_rows > 0)
                    {
                        while($row2 = $result2->fetch_assoc())
                        {
                            $fullname = $row2['first_name']." ".$row2['last_name'];
                            $_SESSION['full_name'] = $fullname;
                            $_SESSION['account_id'] = $id;
                            header('Location:dashboard.php');
                        }
                    }
               
            }
        }

    }
    
}

?>