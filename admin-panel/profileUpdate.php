<?php
ob_start();
include("header.php");
include("../database/db.php");

?>
    
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Profile Mangement</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">My Profile</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              
              <!-- Form Elements -->
              <div class="col-lg-12">
                <div class="block">
                  <div class="title"><strong>Account Information</strong></div>
                  <div class="block-body">
                    

                    <form class="form-horizontal" method="POST" action="">

                    <?php
                              $ids = $_GET['id']; 

                              $query = "SELECT * from `user_info` WHERE id={$ids}";

                              $showdata = mysqli_query($db_con, $query);

                              $arryData = mysqli_fetch_array($showdata);

                              if(isset($_POST['btnUpdate'])){
                                  $name=$_POST['name'];
                                  $username=$_POST['username'];
                                  $password=$_POST['password'];

                                  if(empty($name)||empty($username)||empty($password)){
                                    echo'<div class="alert alert-danger" role="alert">
                                      Fields Cannot be empty.
                                    </div>';
                                }
                                  else{
                                    $idUpt=$_GET['id'];

                                  $query1 = "UPDATE `user_info` set  full_name='{$name}', username='{$username}',password='{$password}' WHERE id={$idUpt}";

                                  $result=mysqli_query($db_con, $query1);
                                    if($result){
                                      echo'<div class="alert alert-success" role="alert">
                                      Update Successfull
                                    </div>';
                                    header("refresh:1 url=user_profile.php");
                                    ob_end_flush();
                                  }
                                  }
                                  
                                }
                        ?>
                    

                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Change Full Name</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control disables" value="<?php echo $arryData['full_name'];?>" name="name">
                            </div>
                          </div>

                          
                          
                            
                          <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Change Username</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="<?php echo $arryData['username'];?>" name="username">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Change Password</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" value="<?php echo $arryData['password'];?>" name="password">
                            </div>
                          </div>
                          <div class="form-group row">
                        <div class="col-sm-9 ml-auto">
                          <button type="submit" class="btn btn-secondary" name="submit"><a href="user_profile.php">Cancel</a></button>
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