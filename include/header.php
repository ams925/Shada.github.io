<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shada</title>
    <link rel="icon" href="img\logo.png" type="image/png" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">    
  </head>
  <body>
  <header class="">
        <a href="../index.php" class="brand">SHADA</a>
        <div class="menu-btn"></div>
        <div class="navigation">
          <div class="navigation-items">
            <a href="./index.php">Home</a>
            <a href="./room.php">Rooms</a>
            <a href="./booking.php">Book Now</a>
            <a href="./gallary.php">Gallery</a>
            <a href="./dining.php">Dining</a>
            <?php
            
            if (isset($_SESSION['login'])) {
              
              echo'<a href="./admin-panel/index.php">Dashboard</a>';
            }else{
              echo'<a href="./login.php">Login</a>';
            }
            
            ?>
            
          
          </div>
        </div>
      </header> 
      