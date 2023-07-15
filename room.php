<?php 
include("include/header.php") ;
include("database/db.php");
?>

        <section class="room-land">
        <div class="room-cover">
            <div class="linear-gradient-container"></div>
            <h1>LUXURY. COZY. COMFORTABLE.</h1>
        </div>
    </section>

    <!-- Service and Amenities -->

    <div class="service-amenities">
        <div class="service-container">
            <h1>Service & Amenities</h1>
            <span></span>
            <p>THE PALACE EXPERIENCE</p>
        </div>
    </div>

    <div class="amenities-info">
        <div class="amenities-first">
            <div class="linear-gradient-container">
                <h4>We present to you</h4>
                <div class="amenities-cover">
                                    <ul>
                        <li>In-Room dining</li>
                        <li>Luxury Spa</li>
                        <li>Complimentary house car service</li>
                        <li>24-hour laundry and dry cleaning</li>
                        <li>Guest Experience team</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="amenities-second">
            <div class="linear-gradient-container">
                <h4>Guest Experience</h4>
                <p>
                    Our multilingual Les Clefs d'Or concierges, as well as our Guest Experience Team, are dedicated to ensuring that your stay is a memorable one.
                    <br>
                    At your service around the clock, our experienced team members can assist you with all manner of everyday arrangements, including transportation, dining reservations, and theater tickets, as well as curated, one-of-a-kind experiences.
                </p>
            </div>
            
        </div>
    </div>

    <div class="room-head-container">
        <div class="room-info-heading">
            <h1>Rooms</h1>
            <span></span>
            <p>EXPERIENCE ONLY THE BEST</p>
        </div>
    </div>
    

    <section class="room-cards">
        
            <?php 
            
            $query = "SELECT * FROM `room_manage`";
            $result = mysqli_query($db_con, $query);
            if(mysqli_num_rows($result) > 0){
                foreach($result as $row)
                {
            ?>
            <div class="room-info-content-1">
                
                <div class="room-info-img">
                <img src="./file_upload/<?php echo $row['room_image'];?>">
                </div>
    
                <div class="room-info">
                    <h1><?php echo $row['room_name'];?></h1>
                    <p><?php echo $row['description'];?></p>
    
                    <p class="price">From: <span><?php echo $row['price'];?></span>/ Night</p>
    
                    <button class="book-btn" type="submit"><a href="booking.php?id=<?php echo $row['id'];?>">Book Now</a></button>
    
                </div>
            </div>
        <?php
            }
        }
        ?>
    </section>
    <?php 
include("include/footer.php") 
?>
