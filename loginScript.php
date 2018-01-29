<?php
    session_start(); // Starting Session
    $error=''; // Variable To Store Error Message
    $dbname = "itemslist";
    if (isset($_POST['submit'])) {
        if (empty($_POST['username']) || empty($_POST['password'])) {
            $error = "Username or Password is invalid";
        }
        else
        {
    // Define $username and $password
            $username=$_POST['username'];
            $password=$_POST['password'];
    // Establishing Connection with Server by passing server_name, user_id and password as a parameter
            /*$connection = mysqli_connect("localhost", "root", "");*/
            $mysqli = new mysqli("localhost", "root", "",$dbname);
    // To protect MySQL injection for Security purpose
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = $mysqli -> real_escape_string($username);
            $password = $mysqli -> real_escape_string($password);
    // Selecting Database
            //$db = $mysqli->select_db("itemslists");
    // SQL query to fetch information of registerd users and finds user match.
            $results = $mysqli->query("select * from user where password='$password' AND username='$username'");
            echo 'Davess';
            $rows = $results->num_rows;
            echo $rows;
            if ($rows == 1) {
                $_SESSION['login_user']=$username; // Initializing Session
                header("location: index.php"); // Redirecting To Other Page
            }

            else {
                $error = "Username or Password is invalid";
            }

            mysqli_close($mysqli); // Closing Connection
        }
    }
?>