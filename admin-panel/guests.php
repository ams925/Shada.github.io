<?php

include("header.php");
include("../database/db.php");

?>
    
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Tables</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Guest's</li>
          </ul>
        </div>
        <section class="no-padding-top">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Customer Information</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Full Name</th>
                          <th>Phone Number</th>
                          <th>Check In</th>
                          <th>Check Out</th>
                        </tr>
                      </thead>

                      <?php
                    
                      $query = "SELECT * FROM `booking_info`";
                      $result = mysqli_query($db_con, $query);

                      if(mysqli_num_rows($result) > 0){
                        foreach($result as $row)
                        {                          
                          ?>

                        <tr>
                          <td><?php echo $row['id'];?></td>
                          <td><?php echo $row['full_name'];?></td>
                          <td><?php echo $row['contact'];?></td>
                          <td><?php echo $row['check_in'];?></td>
                          <td><?php echo $row['check_out'];?></td>
                        </tr>
                          <?php
                        }
                        
                      }else{
                        ?>
                        <tr>
                        <td>No such Record Found</td>
                      </tr>
                      }
                      <?php
                      }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

<?php

include("footer.php");

?>