<?php

?><script> var confirmation = 0; </script><?php

function connection()
{

    $conn = new mysqli('localhost', 'root', '', 'login');

    if($conn->connect_error)
    {
        echo "Connection Error: ".$conn->connect_error;
    }
    else
    {
        return $conn;
    }

}

function register()
{
  session_start();
  if(isset($_POST['submit']))
  {
    $conn = connection();
    $fname = ucwords($_POST['fname']);
    $username = $_POST['username'];
    $mobile_number = $_POST['mobile_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `accounts`(`username`, `password`) VALUES ('$username','$password')";
    if($conn->query($sql) === true)
    {
        
        $sql = "INSERT INTO `user`(`fname`, `mobile`, `email`, `account_id`) VALUES ('$fname','$mobile_number','$email',(SELECT account_id FROM `accounts` WHERE username = '$username'))";
        if($conn->query($sql) === true)
        {
           ?><script> var confirmation = 1; </script><?php
        }
    
    }
    else
    {
        ?><script> var confirmation = 2; </script><?php
    }
  }

  if(isset($_SESSION['logged_in']))
  {
      header("Location: index.php");
  }

}

function login()
{
    session_start();
    if(isset($_POST['login']))
    {
        $conn = connection();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `accounts` WHERE username = '$username'";
        if($conn->query($sql)->num_rows > 0)
        {
            $row = $conn->query($sql)->fetch_assoc();
            $compare_db_password = $row['password'];
            $id = $row['account_id'];

            if($password == $compare_db_password)
            {
                $_SESSION['logged_in'] =  $id;
                $account_id = $_SESSION['logged_in'];
                $sql = "SELECT * FROM `user` LEFT JOIN accounts ON (user.account_id = accounts.account_id) WHERE user.account_id = '$account_id'";
                if($conn->query($sql)->num_rows > 0)
                {
                    $row = $conn->query($sql)->fetch_assoc();
        
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['mobile'] = $row['mobile'];
                    $_SESSION['email'] = $row['email'];

                    if($_SESSION['mobile'] == "")
                    {
                        $_SESSION['mobile'] = "N/A";
                    }

                    if($_SESSION['email'] == "")
                    {
                        $_SESSION['email'] = "N/A";
                    }
                }
            }
            else
            {
                ?><script> var confirmation = 3; </script><?php
            }

        }
        else
        {
            ?><script> var confirmation = 3; </script><?php
        }
    }

    if(isset($_SESSION['logged_in']))
    {
        header("Location: index.php");
    }
}

function index()
{
    session_start();

    if(isset($_POST['logout']))
    {
        session_destroy();
        header("Location: login.php");
    }

    if(!isset($_SESSION['logged_in']))
    {

        header("Location: login.php");
    }
}

?>