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
            <li class="breadcrumb-item active">Food Menu</li>
          </ul>
        </div>
              
        <section class="no-padding-top">
        <div class="col-sm-3">
                <div class="block">
                  <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Food </button>
                    <!-- Modal-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                      <div role="document" class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Add New Food</strong>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">X</span></button>
                          </div>
                          <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                              <div class="form-group">
                                <label>Food Image</label>
                                <input type="file" placeholder="Image" class="form-control" name="image">
                              </div>
                              <div class="form-group">       
                                <label>Name</label>
                                <input type="text" placeholder="Food Name" class="form-control" name="name">
                              </div>
                              <div class="form-group">       
                                <label>Price $</label>
                                <input type="number" placeholder="Price ($)" class="form-control" name="price">
                              </div>
                              <div class="form-group">       
                              <div class="modal-footer">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                          </div>
                              </div>
                            </form>

                            <!-- data insert php -->

                            <?php

                                if(isset($_POST['submit'])){

                                    $image=$_FILES['image'];
                                    $name=$_POST['name'];
                                    $price=$_POST['price']; 

                                    
                                    $filename=$image['name'];
                                    $filepath=$image['tmp_name'];
                                    $fileerror=$image['error'];

                                    if($fileerror == 0){
                                        $dest = '../file_upload/'.$filename;
                                        move_uploaded_file($filepath, "../file_upload/" . "$filename");
                                        //move_uploaded_file($filepath, $dest);

                                        $query ="INSERT into `food_menu` (food_image, food_name, price) value ('$filename', '$name', '$price')";

                                        $result=mysqli_query($db_con, $query);

                                    }

                                }else{
                                    echo"Nothing";
                                }

                            ?>

                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="block margin-bottom-sm">
                  <div class="title"><strong>Food Menu</strong></div>
                  <div class="table-responsive"> 
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Price $</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <?php
                    
                    $query = "SELECT * FROM `food_menu`";
                    $result = mysqli_query($db_con, $query);

                    if(mysqli_num_rows($result) > 0){
                      foreach($result as $row)
                      {                          
                        ?>

                      <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><img src="../file_upload/<?php echo $row['food_image'];?>" width="150" height="150"></td>
                        <td><?php echo $row['food_name'];?></td>
                        <td><?php echo $row['price'];?></td>
                        <td><button type="submit" id="submit" name="submit" class="btn btn-primary"><a href="menuUpdate.php?id=<?php echo $row['id'];?>">Edit</a></button></td>
                        <td><button type="submit" id="submit" name="submit" class="btn btn-primary"><a href="menuDelete.php?id=<?php echo $row['id'];?>">Delete</a></button></td>
                      </tr>
                        <?php
                      }
                      
                    }else{
                      ?>
                      <tr>
                      <td>No such Record Found</td>
                    </tr>
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