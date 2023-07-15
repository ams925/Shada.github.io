<?php

include("database/db.php");


$full_name= $_POST['full_name'];
$email= $_POST['email'];
$review= $_POST['review'];

$query = "INSERT into `review_table` (full_name, email, review) VALUES ( '$full_name', '$email', '$review')";

$result = mysqli_query($db_con,$query) ;

if ($result) {
    echo'<div class="alert alert-success" role="alert">Update Successfull</div>';
}else {
    echo("Booking Failed. Please try again.");
}

?>

