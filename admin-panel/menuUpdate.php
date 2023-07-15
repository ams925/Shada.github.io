<?php
ob_start();
include("header.php");
include("../database/db.php");

$ids = $_GET['id'];

$sql    =   "SELECT * FROM  `food_menu` where id=$ids LIMIT 1";
$result =   mysqli_query($db_con, $sql) or die("Query Unsuccessful");
$row    =   mysqli_fetch_array($result);
?>

<div class="page-content">
    <!-- Page Header-->
    <div class="page-header no-margin-bottom">
        <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Menu</h2>
        </div>
    </div>
    <!-- Breadcrumb-->
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Food Menu</li>
        </ul>
    </div>

    <div class="modal-body room-update-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Food Image</label>
                <input type="file" placeholder="Image" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" placeholder="Food Name" class="form-control" name="name" value="<?php echo $row['food_name']; ?>">
            </div>

            <div class="form-group">
                <label>Price $</label>
                <input type="number" placeholder="Price ($)" class="form-control" name="price" value="<?php echo $row['price']; ?>">
            </div>
            <div class="form-group">
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                    <button type="submit" class="btn btn-primary" name="btnUpdate">Save changes</button>
                </div>
            </div>
        </form>
        <?php

        if (isset($_POST['btnUpdate'])) {


            $name = $_POST['name'];
            $price = $_POST['price'];

            $dest = '../file_upload/' . $row['food_image'];

            if (!$_FILES['image']['error']) { //User uploaded new image


                $filename = $_FILES["image"]["name"];
                $tempname = $_FILES["image"]["tmp_name"];
                $filename = time() . $filename;

                $extension = pathinfo($filename, PATHINFO_EXTENSION);
                $permit = array('jpg', 'png');
                if (!in_array($extension, $permit)) {
                    echo '<div class="alert alert-danger" role="alert">Invalid File Type. Only jpg and png file type is allowed</div>';
                } else {
                    unlink($dest); //Delete old pic
                    $query = "UPDATE `food_menu` SET `food_name` = '" . $name . "',`price`='" . $price . "',`food_image`='" . $filename . "' WHERE id=$ids";
                    $result1 = mysqli_query($db_con, $query);

                    if ($result1) {
                        echo '<div class="alert alert-success" role="alert">Update Successfull</div>';
                        move_uploaded_file($tempname, "../file_upload/" . "$filename");

                        header("Refresh:2");
                    }
                }
            } else {
                $query = "UPDATE `food_menu` SET  `food_name` = '" . $name . "',`price`='" . $price . "' WHERE id=$ids";
                $result1 = mysqli_query($db_con, $query);

                if ($result1) {
                    echo '<div class="alert alert-success" role="alert">Update Successfull</div>';
                    header("Refresh:2 url=meals.php");
                    ob_end_flush();
                }
            }
        }
        ?>
    </div>
</div>
<?php

include("footer.php");

?>