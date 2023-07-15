<?php 

ob_start();

include("header.php");
include("../database/db.php");


?>

      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Staff Mangement</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Staff Mangement</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Edit Staff Information</strong></div>
                  <div class="block-body">
                  
                  <form class="form-horizontal" method="POST" action="">
                    <?php
                              $ids = $_GET['id']; 
                              $query = "SELECT * from `staff_info` WHERE id={$ids}";

                              $showdata = mysqli_query($db_con, $query);

                              $arryData = mysqli_fetch_array($showdata);

                              if(isset($_POST['btnUpdate'])){

                                $idUpt=$_GET['id'];

                              $name=$_POST['name'];
                              $contact=$_POST['contact'];
                              $address=$_POST['address']; 
                              $position=$_POST['position'];  

                              $query1 = "UPDATE `staff_info` set  full_name='{$name}', contact='{$contact}', address='{$address}', position='{$position}' WHERE id={$idUpt}";

                              $result=mysqli_query($db_con, $query1);
                                if($result){
                                  echo'<div class="alert alert-success" role="alert">
                                  Update Successfull
                                </div>';
                                header("refresh:1 url=staff_management.php");
                                ob_end_flush();
                                }
                                
                            }
                    ?>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Staff Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $arryData['full_name'];?>" name="name">
                        </div>
                      </div>
                      <div class="line"></div>
                                
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Phone Number</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $arryData['contact'];?>" name="contact">
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
                        <label class="col-sm-3 form-control-label">Position</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $arryData['position'];?>" name="position">
                        </div>
                      </div>

                      <div class="line"></div>
                      <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" name="submit">Cancel</button>
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