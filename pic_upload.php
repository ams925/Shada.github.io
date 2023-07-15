<?php

include("database/db.php");

?>
<form action="pic_upload.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="name">
    
    <input type="number" name="price" placeholder="price">
    <input type="file" name="image">
<button type="submit" name="submit">submit</button>
</form>


<?php

if(isset($_POST['submit'])){

    $image=$_FILES['image'];
    $name=$_POST['name'];
    //$description=$_POST['description'];
    $price=$_POST['price']; 

    
    $filename=$image['name'];
    $filepath=$image['tmp_name'];
    $fileerror=$image['error'];

    if($fileerror == 0){
        $dest = 'file_upload/'.$filename;
        
        move_uploaded_file($filepath, $dest);

        $query ="INSERT into `food_menu` (food_image, food_name, price) value ('$dest', '$name', '$price')";

        $result=mysqli_query($db_con, $query);

    }

}else{
    echo"Nothing";
}

?>


