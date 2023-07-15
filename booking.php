<?php
include("include/header.php");
include("database/db.php")
?>

<section class="main_bg">
    <div class="form">
        <div class="room-info-heading gallary-head booking-head">
            <h1>BOOK NOW</h1>
            <span></span>
            <p>Enjoy a lifetime of luxury</p>
        </div>
        <div class="main-form">
        <?php
                if (isset($_POST['btnBook'])) {
                    

                    $full_name = $_POST['full_name'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $contact = $_POST['contact'];
                    $child = $_POST['children'];
                    $adult = $_POST['adult'];
                    $check_in = $_POST['check_in'];
                    $check_out = $_POST['check_out'];

                    if (empty($full_name) || empty($address) || empty($email) || empty($contact) || empty($child) || empty($adult) || empty($check_in) || empty($check_out)) {
                        echo '<div class="alert-danger"><p>Fields Cannot be empty</p> </div>';
                    } else {
                        $query = "INSERT into `booking_info` ( full_name, address, email, contact, child, adult, check_in, check_out) VALUES ( '$full_name','$address' , '$email','$contact' , '$child' , '$adult' , '$check_in' , '$check_out')";

                        $result = mysqli_query($db_con, $query);

                        if ($result) {
                            echo '<div class="alert"><p>Booking Successfull</p> </div>';
                            header("Refresh:1, url=register.php");
                        } else {
                            echo ("Booking Failed. Please try again.");
                        }
                    }
                }

                ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

                <div>
                    <span>Full Name:</span>
                    <input type="text" name="full_name" id="name" placeholder="Full Name">
                </div>
                <div>
                    <span>Address:</span>
                    <input type="text" name="address" id="name" placeholder="Address">
                </div>
                <div>
                    <span>Email:</span>
                    <input type="email" name="email" id="name" placeholder="Email">
                </div>
                <div>
                    <span>Phone Number:</span>
                    <input type="number" name="contact" id="number" value="1">
                </div>
                <div>
                    <span>Children:</span>
                    <input type="number" name="children" id="number" value="1">
                </div>
                <div>
                    <span>Adult:</span>
                    <input type="number" name="adult" id="time" value="1">
                </div>
                <div>
                    <span>Check In:</span>
                    <input type="date" name="check_in" id="date" placeholder="date">
                </div>
                <div>
                    <span>Check Out:</span>
                    <input type="date" name="check_out" id="date" placeholder="date">
                </div>
                <div id="submit">
                    <input type="submit" value="SUBMIT" id="login" name="btnBook">
                </div>

                <?php



                ?>
            </form>
        </div>
    </div>
</section>

<?php
include("include/footer.php")
?>