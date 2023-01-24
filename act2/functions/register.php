<?php
include 'functions/connection.php';

if(isset($_POST['register']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $account_id = "";
    $conn = dbConnect();


    $first_name = ucwords($first_name);//to make evry first leeter capitalize//
    $last_name = ucwords($last_name);//to make evry first leeter capitalize//
    $address = ucwords($address);//to make evry first leeter capitalize//
    $username = ucwords($username);//to make evry first leeter capitalize//
  
    $sql = "INSERT INTO `accounts`(`username`, `password`) VALUES ('$username','$password')";
    if ($conn->query($sql) === TRUE)
    {
        $sql2= "SELECT * FROM `accounts` WHERE `username` = '$username'";
        $result2 = $conn->query($sql2);
      
        if ($result2->num_rows > 0)
        {
            $row = $result2->fetch_assoc();
    
                $account_id =  $row['account_id'];
            

                $sql3 = "INSERT INTO `users`(`first_name`, `last_name`, `address`, `contact_nmumber`, `account_id`) 
                VALUES ('$first_name','$last_name','$address','$contact_number','$account_id')";
    
                if ($conn->query($sql3) === TRUE)
                {
                            ?>
                    <script>

                        alert("you are now registered!")

                    </script>
                    <?php
                    header('Location:Login.php');
                }
                else {
            
                    ?>
                    <script>

                        alert("an error occured");

                    </script>
                    <?php
            
                }

      
        }
    }
    else {
  
        ?>
        <script>

            alert("Error, the username is already in the list.");

        </script>
        <?php
  
    }
}

?>