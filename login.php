<!DOCTYPE html>
<html>
<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 20/05/2017
 * Time: 08:10 PM
 */
    include 'header.php';
    include 'database.php';
?>

<body>
    <h2>Login Form</h2>
    <div class="col-xs-11 loginForm col-centered container-fluid">
        <form action="/action_page.php" >
            <div class="imgcontainer">
                <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit" class="login">Login</button>
                <input type="checkbox" checked="checked"> Remember me
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <button type="button" class="cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
