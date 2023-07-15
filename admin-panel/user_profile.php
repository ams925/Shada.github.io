<?php

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
                    
                    <form class="form-horizontal" method="POST">

                      <?php

                        $userId = $_SESSION['user_id'];
                      
                        $query = "SELECT * FROM `user_info` WHERE id={$userId}";
                        $result = mysqli_query($db_con, $query);
                        $row    = mysqli_fetch_array($result);
                      ?>

                          

                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label"> Full Name</label>
                            <div class="col-sm-9">
                              
                              <h4> <?php echo $row['full_name'];?></h4>
                            </div>
                          </div>

                          
                          
                            
                          <div class="line"></div>
                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Username</label>
                            <div class="col-sm-9">
                            <h4> <?php echo $row['username'];?></h4>
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Password</label>
                            <div class="col-sm-9">
                            <h4> <?php echo $row['password'];?></h4>
                            </div>
                          </div>
                          <button type="submit" id="submit" name="submit" class="btn btn-primary"><a href="profileUpdate.php?id=<?php echo $row['id'];?>">Edit</a></button>
                        <div class="line"></div>
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