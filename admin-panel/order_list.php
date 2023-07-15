<?php

include("header.php");
include("../database/db.php");

?>
<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Orders</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
        </ul>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="block margin-bottom-sm">

                    <div class="title"><strong>Order List</strong></div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Food Name</th>
                                    <th>Food Price</th>
                                    <th>Guest</th>
                                </tr>
                            </thead>

                            <?php

                            $query = "SELECT * FROM `order_list`";
                            $result = mysqli_query($db_con, $query);

                            if (mysqli_num_rows($result) > 0) {
                                foreach ($result as $row) {
                            ?>

                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['food_name']; ?></td>
                                        <td><?php echo $row['food_price']; ?></td>
                                        <td><?php echo $row['guest']; ?></td>
                                        <td><button type="submit" id="submit" name="submit" class="btn btn-primary"><a href="orderDelete.php?id=<?php echo $row['id']; ?>">Delete</a></button></td>
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





    <?php

    include("footer.php");

    ?>