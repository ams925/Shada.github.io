<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "shada";

$db_con=mysqli_connect($host,$user,$password,$db_name);


if (!$db_con) {
    die("Connection hoy nai".mysqli_connect_error());
}
?>
