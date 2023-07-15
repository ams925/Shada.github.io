<?php

include("header.php");
include("../database/db.php");

?>

<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Staff</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Staff's</li>
        </ul>
    </div>

    <section class="no-padding-top">
        <div class="col-sm-3">
            <div class="block">
                <div class="block-body text-center">
                    <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Add Staff </button>
                    <!-- Modal-->
                    <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Add New Staff</strong>
                                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">X</span></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label>Full Name</label>
                                            <input type="text" placeholder="Name" class="form-control" name="name">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="number" placeholder="Contact" class="form-control" name="contact">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" placeholder="Address" class="form-control" name="address">
                                        </div>
                                        <div class="form-group">
                                            <label>Position</label>
                                            <input type="text" placeholder="Position" class="form-control" name="position">
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
                                    if (isset($_POST['submit'])) {
                                        $name = $_POST['name'];
                                        $contact = $_POST['contact'];
                                        $address = $_POST['address'];
                                        $position = $_POST['position'];
                                        $query = "INSERT into `staff_info` (full_name, contact, address, position) value ('$name', '$contact', '$address','$position')";
                                        $result = mysqli_query($db_con, $query);
                                        if ($result) {
                                            echo '<div class="alert alert-success" role="alert">
                                            Update Successfull
                                            </div>';
                                            header("refresh:1");
                                            ob_end_flush();
                                        }
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
                        <div class="title"><strong>Staff Information</strong></div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Position</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                
                                <?php
                                $query = "SELECT * FROM `staff_info`";
                                $result = mysqli_query($db_con, $query);
                                if (mysqli_num_rows($result) > 0) {
                                    foreach ($result as $row) {
                                ?>
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['full_name']; ?></td>
                                            <td><?php echo $row['contact']; ?></td>
                                            <td><?php echo $row['address']; ?></td>
                                            <td><?php echo $row['position']; ?></td>
                                            <td><button type="submit" id="submit" name="submit" class="btn btn-primary"><a href="updateStaff.php?id=<?php echo $row['id']; ?>">Edit</a></button></td>
                                            <td><button type="submit" id="submit" name="submit" class="btn btn-primary"><a href="staffDelete.php?id=<?php echo $row['id']; ?>">Delete</a></button></td>
                                        </tr>
                                    <?php
                                    }
                                } else {
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