<?php

ob_start();
include("header.php");
include("../database/db.php");

?>




<?php

$staffid = $_GET['id'];


$query = "DELETE from `staff_info` WHERE id= {$staffid}";

$result = mysqli_query($db_con, $query);

if($result){
    echo'<div class="alert alert-success col-10" style="height: 50px;" role="alert">Delete Successfull</div>';
    header("refresh:1 url=staff_management.php");
    ob_end_flush();
    }

?>