<?php


session_start();
include("../database/db.php");

?>
            <?php
                
                    $idUpt=$_GET['id'];

                    $query = "SELECT * FROM `food_menu` WHERE id={$idUpt}";
                    $result = mysqli_query($db_con, $query);
                    $row= mysqli_fetch_array($result);
                    $food_name = $row['food_name'];
                    $food_price = $row['price'];

                    $username = $_SESSION['username'];
                    

                    
                    if(isset($_GET['id'])){
                        $sql = "INSERT into `order_list` (food_name, food_price, guest) value ('$food_name', '$food_price', '$username')";
                        $result = mysqli_query($db_con, $sql);
                    
                        if ($result) {
                            header("Location:../dining.php");
                            ob_end_flush();
                        }
                    }
                    
            ?>

