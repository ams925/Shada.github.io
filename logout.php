<?php
include("database/db.php");

session_start();

session_unset( $_SESSION["username"]);

session_unset($_SESSION['user_id']) ;
session_unset($_SESSION['user_role']);
session_unset($_SESSION['login']);
session_destroy();

header("location: login.php");

?>