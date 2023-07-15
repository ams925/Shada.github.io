<?php

ob_start();
include("header.php");
include("../database/db.php");

?>




<?php

$guestid = $_GET['id'];


$query = "DELETE from `booking_info` WHERE id= {$guestid}";

$result = mysqli_query($db_con, $query);

if($result){
    echo'<div class="alert alert-success col-10" style="height: 50px;" role="alert">Delete Successfull</div>';
    header("refresh:1 url=bookings.php");
    ob_end_flush();
    }

?>