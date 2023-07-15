<?php 
include("include/header.php"); 
include("database/db.php");
?>

    <section class="dining-land">
        <div class="dining-cover">
            <div class="linear-gradient-container-dining"></div>
            
            <div class="dining-cover-info">
                <h1>Bon Appétit.</h1>
                <p>Enjoy Both Luxury <br>& Food at the same time.</p>
            </div>
        </div>
    </section>

    <section class="dining-intro">
        <div class="precious-container">
            <div class="precious-taste-img"></div>
            <div class="precious-taste-text">
                <h3>We Provide Only The Best</h3>
                <h1>Luxurious Taste</h1>
                <p>Our chef is a trained professional cook and tradesman who is proficient in all aspects of food.</p>
                <button type="submit"><a href="#menu">Order Now</a></button>
            </div>
        </div>
    </section>

    <div class="room-head-container">
        <div class="room-info-heading">
            <h1>Our Chef</h1>
            <span></span>
            <p>Meet Our master chef</p>
        </div>
    </div>

    <section class="chef-info-sect">
        <div class="chef-info-container">
            <div class="chef-img"></div>
            <div class="chef-info">
                <h1>Adam Rodger</h1>
                <p>
                    Since his childhood in Commack, Long Island, Rodger has been obsessed with food, including its role in expressing different cultures. From his family’s seder table to the backyard barbecue pit of more recent years, the chef’s Jewish roots have always been a key ingredient, he said.
                </p>
            </div>
        </div>
    </section>

    <div class="room-head-container" id="menu">
        <div class="room-info-heading">
            <h1>Menu</h1>
            <span></span>
            <p>Pick your desired</p>
        </div>
    </div>
    
    <section class="menu-body" >
        
        <div class="card">
        <?php 
            
            $query = "SELECT * FROM `food_menu`";
            $result = mysqli_query($db_con, $query);
            if(mysqli_num_rows($result) > 0){
                foreach($result as $row)
                {
            ?>
            <div class="card__body">
                <img src="./file_upload/<?php echo $row['food_image'];?>" class="card__image">
                
                <h2 class="card__title"><?php echo $row['food_name'];?></h2>
                <h2 class="card__title">Price: <?php echo $row['price'];?></h2>            
            </div>
            <button type="submit" id="submit" class="card__btn" name="btnOrder"><a href="admin-panel/order_insert.php?id=<?php echo $row['id'];?>">Place Order</a></button>
            <?php
            
                if (isset($_POST['btnUpdate'])) {
                    echo'<div class="alert"><p>Order Successfull</p> </div>';
                }
            
            ?>
            
            <?php
            
                }
            }
            
            ?>
        </div>
    </section>

    
    <?php 
include("include/footer.php") 
?>
