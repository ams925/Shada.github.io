<?php
include("include/header.php");
include("database/db.php");

?>

<section class="login">
    <div class="center">
        <h1>Registration</h1>

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <?php
            if (isset($_POST['btnReg'])) {
                $full_name = $_POST['full_name'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                if (empty($full_name) || empty($username) || empty($password)) {
                    echo '<div class="alert-danger"><p>Fields Cannot be empty</p> </div>';
                } else {
                    $check = "SELECT * FROM `user_info` WHERE username='" . $username . "'";
                    $chk = mysqli_query($db_con, $check);
                    if (mysqli_num_rows($chk) == 1) {
                        echo '<div class="alert alert-danger" role="alert">Username already in use!</div>';
                    } else {
                            $query = "INSERT into `user_info` (full_name, username, password) VALUES ( '$full_name','$username' , '$password')";
                            $result = mysqli_query($db_con, $query);
                            if ($result) {
                            echo ('<div class="alert"><p>Sign Up Success. Login Now</p> </div>');
                            header("Refresh:2 ;url=login.php");
                        } else {
                            echo ("Registration Failed. Please try again.");
                        }
                    }
                }
            }



            ?>
            <div class="txt_field">
                <input type="text" name="full_name" id="full_name">
                <span></span>
                <label>Full Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="username" id="username">
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" id="password">
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="submit" id="login" name="btnReg">
            <div class="signup_link">
                Already a member? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</section>


<?php
include("include/footer.php")
?>