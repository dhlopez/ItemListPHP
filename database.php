<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 13/05/2017
 * Time: 02:56 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itemslist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT * FROM Items";

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
$conn->close();
?>