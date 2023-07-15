<?php 
session_start();
include("../database/db.php");

if (!isset($_SESSION['login'])) {
  header("Location:../login.php");
}
?>


<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SHADA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
  </head>
  <body>
  <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase">
                <strong class="text-primary">SHADA</strong>
              </div>
              <div class="brand-text brand-sm"><strong class="text-primary">S</strong><strong>H</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <!-- Log out               -->
            <div class="list-inline-item logout">                   
              <a id="logout" href="../logout.php" class="nav-link"> <span class="d-none d-sm-inline">Logout </span><i class="icon-logout"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          
          <div class="title">
            <h1 class="h5"><?php echo$_SESSION['full_name']?></h1>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">

        <?php
        if($_SESSION['user_role']==1){
          echo'
          <li class="active"><a href="index.php"> <i class="icon-home"></i>Home </a></li>
          <li><a href="guests.php"> <i class="icon-grid"></i>Guest"s </a></li>
          <li><a href="bookings.php"> <i class="fa fa-bar-chart"></i>Bookings </a></li>
          <li><a href="room_list.php"> <i class="icon-padnote"></i>Room Management</a></li>
          <li><a href="staff_management.php"> <i class="icon-padnote"></i>Staff Information</a></li>
          <li><a href="meals.php"> <i class="icon-padnote"></i>Food Menu </a></li>
          <li><a href="user_profile.php"> <i class="icon-padnote"></i>Account </a></li>
          <li><a href="order_list.php"> <i class="icon-padnote"></i>Orders </a></li>
          <li><a href="../index.php"> <i class="icon-padnote"></i>Website </a></li>

          ';
        }else{
          echo'
          
          <li><a href="user_profile.php"> <i class="icon-padnote"></i>Account </a></li>
          <li><a href="../index.php"> <i class="icon-padnote"></i>Website </a></li>
          
          ';
        }
        
        ?>


          
          
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      