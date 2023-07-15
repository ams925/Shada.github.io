<?php

ob_start();
include("header.php");
include("../database/db.php");

?>




<?php

$ids = $_GET['id'];


$query = "DELETE from `room_manage` WHERE id= {$ids}";

$result = mysqli_query($db_con, $query);

if($result){
    echo'<div class="alert alert-success col-10" style="height: 50px;" role="alert">Delete Successfull</div>';
    header("refresh:1 url=room_list.php");
    ob_end_flush();
    }

?>