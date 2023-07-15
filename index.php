


<?php 
ob_start();
include("include/header.php"); 
include("database/db.php")
?>

    <section class="showcase">
      

      <video src="img/vid1.mp4" muted autoplay loop></video>

      <div class="overlay"></div>

      <div class="text">
        <h1>SHADA</h1>
        <h3>ICON OF LUXURY</h3>
      </div>
    </section>

    <section class="philosopy-mid">
      <div class="linear-gradient-container"></div>

      <div class="philosopy-warp">
        <div class="philosopy-container">
            <p>OUR PHILOSOPHY</p>
            <h1>
            Down to every last<br />
            detail
          </h1>
        </div>

        <div class="qoute-wrapper">
          <div class="qoute-container">
            <h1>
              <b>"SHADA"</b> takes hotel design to a new level of modern luxury,
              and has also redefined the meaning of exceptional hospitality,
              both in Saudi Arabia and around the world.
            </h1>
            <h1>Ermanno Zanini</h1>
            <p>Riyadh, Saudi Arabia</p>
          </div>
        </div>
      </div>
    </section>

  <section class="reserve">
    <div class="room-head-container">
      <div class="room-info-heading">
          <h1>Reserve Room</h1>
          <span></span>
          <p>BOOK ONE OF OUR ROOMS AND ENJOY EXCEPTIONAL COMFORT</p>
      </div>
    </div>

    <div class="reserve-container">
      
      <form action="" method="POST">
        <div class="reserve-menu">
          <div class="input-box">
            <label for="">Check In:</label>
            <input type="date" name="" id=""> 
          </div>
          <div class="input-box">
            <label for="">Check Out:</label>
            <input type="date" name="" id=""> 
          </div>
          <div class="input-box">
            <label for="">Adults:</label>
            <input type="number" name="" id="" value="1"> 
          </div>
          <div class="input-box">
            <label for="">Children:</label>
            <input type="number" name="" id="" value="1"> 
          </div>
        </div>
        <div class="reserve-btn">
          <button type="submit" name="btnAvailability">Check Availability </button>
        </div>
        <?php
        if(isset($_POST['btnAvailability'])){
          echo'<div class="alert"><p>Room Avilable</p> </div>';
          header("refresh:2 url=room.php");
        }
        ?>
      </form>
      
    
  </div>
  </section>

  <section class="contact-us">
    <div class="contact-sect-title">
      <h2>
        <small>Contact Us</small> <br>
        Get in touch
      </h2>
    </div>
    <div class="contact-info">
      <div class="contact-card">
        <div class="contact-card-info">
          <h3>Address</h3>
          <p>Ar Rabwah, Riyadh 12834, <br> Saudi Arabia</p>
        </div>
      </div>
      <div class="contact-card">
        <div class="contact-card-info">
          <h3>Email</h3>
          <a href="mailto:info@shadahotels.com">info@shadahotels.com</a>
        </div>
      </div>
      <div class="contact-card">
        <div class="contact-card-info">
          <h3>Telephone</h3>
          <p>+966 920028283</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->

  <div class="testimonials">
      <div class="inner">
        <h1 class="test-head">Reviews</h1>
        
        <div class="border"></div>
        <p class="test-p">What our guest say about us</p>

        <div class="row">
          <?php
            $query = "SELECT * FROM `review_table`";
            $result = mysqli_query($db_con, $query);
            if(mysqli_num_rows($result) > 0){
                foreach($result as $row)
                {
          ?>
          <div class="col">
            <div class="testimonial">
              <div class="name"><?php echo $row['full_name'];?></div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p><?php echo $row['review'];?></p>
            </div>
          </div>
        <?php
                }
              }
        ?>
          
        </div>
      </div>    
    </div>
 <!-- END OF TESTIMONIALS -->
 <!-- start OF reviw -->
 
    <section class="main_bg">
      <div class="form">
        <div class="room-info-heading gallary-head booking-head">
          <h1>Write Your Review</h1>
          <span></span>
          <p>Be Honest</p>
          
      </div>
      
        <div class="main-form">
        
            <form method="POST" action="">
            <?php
              
              

              if(isset($_POST['btnReview'])){
                $full_name= $_POST['full_name'];
                $email= $_POST['email'];
                $review= $_POST['review'];

              if(empty($full_name)||empty($email)||empty($review)){
                echo'<div class="alert-danger"><p>Fields Cannot be empty</p> </div>';
              }else{
                $query = "INSERT into `review_table` (full_name, email, review) VALUES ( '$full_name', '$email', '$review')";
                $result = mysqli_query($db_con,$query) ;
                if($result){
                  echo'<div class="alert"><p>Thanks For Your Feedback</p> </div>';
                  header("refresh:1");
                ob_end_flush();
                }
              }
            }
            ?>
            
                
                <div> 
                    <span>Full Name:</span>
                    <input type="text" name="full_name" id="name" placeholder="Full Name">
                </div>
                <div>
                  <span>Email:</span>
                  <input type="email" name="email" id="name" placeholder="Email">
              </div>
                <div>
                    <span>Review:</span>
                    <textarea class="form-control review-text" rows="8" placeholder="Write here" name="review" id="review"></textarea>                
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="login" name="btnReview">
                </div>
                
            </form>
        </div>
    </div>
  </section>
  
  <!-- END OF review -->
  

  <?php
    include ("include/footer.php")
  ?>
