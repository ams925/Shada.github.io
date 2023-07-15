<?php 

ob_start();

include("header.php");
include("../database/db.php");


?>

      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Bookings</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Bookings</li>
          </ul>
        </div>
        <section class="no-padding-top">
        <div class="container-fluid">
        <div class="row">
            
            <!-- Form Elements -->
            <div class="col-lg-12">
                <div class="block">
                <div class="title"><strong>Edit Bokking Information</strong></div>
                <div class="block-body">
                
                <form class="form-horizontal" method="POST" action="">
                <?php
                            $ids = $_GET['id']; 
                            $query = "SELECT * from `booking_info` WHERE id={$ids}";

                            $showdata = mysqli_query($db_con, $query);

                            $arryData = mysqli_fetch_array($showdata);

                            if(isset($_POST['btnUpdate'])){

                                $idUpt=$_GET['id'];

                            $name=$_POST['name'];
                            $address=$_POST['address'];
                            $email=$_POST['email'];
                            $contact=$_POST['contact'];
                            $child=$_POST['child'];
                            $adult=$_POST['adult']; 
                            $check_in=$_POST['check_in'];  
                            $check_out=$_POST['check_out'];

                            $query1 = "UPDATE `booking_info` set  full_name='{$name}', address='{$address}', email='{$email}',contact='{$contact}',child='{$child}',adult='{$adult}', check_in='{$check_in}',check_out='{$check_out}' WHERE id={$idUpt}";

                            $result=mysqli_query($db_con, $query1);
                                if($result){
                                echo'<div class="alert alert-success" role="alert">
                                Update Successfull
                                </div>';
                                header("refresh:1 url=bookings.php");
                                ob_end_flush();
                                }
                                
                            }
                    ?>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Guest Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $arryData['full_name'];?>" name="name">
                        </div>
                      </div>
                      <div class="line"></div>
                                
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Address</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $arryData['address'];?>" name="address">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" value="<?php echo $arryData['email'];?>" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Contact</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $arryData['contact'];?>" name="contact">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Child</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $arryData['child'];?>" name="child">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Adult</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $arryData['adult'];?>" name="adult">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Check In</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" value="<?php echo $arryData['check_in'];?>" name="check_in">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Check Out</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" value="<?php echo $arryData['check_out'];?>" name="check_out">
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" name="submit" >Cancel</button>
                          <button type="submit" class="btn btn-primary" name="btnUpdate">Save changes</button>

                        </div>
                      </div>
                    </form>



                                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
<?php

include("footer.php");

?>