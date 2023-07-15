


<?php

include("database/db.php");

$full_name = $_POST['full_name'];
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($full_name) || empty($username) || empty($password)) {
    echo '<div class="alert-danger"><p>Fields Cannot be empty</p> </div>';
} else {

    $query = "INSERT into `user_info` (full_name, username, password) VALUES ( '$full_name','$username' , '$password')";
    $result = mysqli_query($db_con, $query) or die(mysqli_error($db_con));

    if ($result) {
        
        echo ("Registration Succesful. Please <a href='login.php'>Login</a> now.");
        header("Refresh:1 ;url=login.php");
    } else {
        echo ("Registration Failed. Please try again.");
    }
}


?>