<?php 
include("include/header.php");
include("database/db.php");


?>

<section class="login">
    <div class="center">
        <h1>Login</h1>
        <form method="POST" action="<?php $_SERVER['PHP_SELF']?>">
        <?php
                    if (isset($_POST['login_btn'])) {
                        $username=$_POST['username'] ;
                        $password=$_POST['password'];
                        if (empty($username)||empty($password)) {
                            echo'<div class="alert-danger"><p>Fields cannot be empty</p> </div>';
                        }
                        else{
                            $query="SELECT * FROM `user_info` WHERE username = '$username' AND password = '$password'";
                            $result= mysqli_query($db_con,$query);
                            
                            if (mysqli_num_rows($result)==1) {
                                $row = mysqli_fetch_array($result);
                                $_SESSION['full_name'] = $row['full_name'];
                                $_SESSION['username'] = $row['username'];
                                $_SESSION['user_id'] = $row['id'];
                                $_SESSION['user_role'] = $row['role'];
                                $_SESSION['login']=true;
                                echo'<div class="alert"><p>Login Successfull</p> </div>';
                                header("Refresh:2 ;url=admin-panel/index.php");
                            }
                            else{
                                echo'<div class="alert-danger"><p>Incorrect Information</p> </div>';
                            }
                        }
                    }
                    ?>
        <div class="txt_field">
            <input type="text"  name="username">
            <span></span>
            <label>Username</label>
        </div>
        <div class="txt_field">
            <input type="password"  name="password">
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login" name="login_btn">
        <div class="signup_link">
            Not a member? <a href="register.php">Signup</a>
        </div>

        </form>
    </div>
</section>


<?php 

include("include/footer.php") ;

?>