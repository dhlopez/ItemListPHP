<?php
/**
 * Created by PhpStorm.
 * User: Casa
 * Date: 17/05/2017
 * Time: 09:06 PM
 */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itemslist";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM items";
$result = $conn->query($sql);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option value='".$row["id"]."'>". $row["itemDesc"]."</option>";//."' measureId='".$row["measureid"]
        //echo "id: " . $row["id"]. " - Desc: " . $row["mesDesc"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>