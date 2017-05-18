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

//$sql = "insert into measure(mesDesc) values(:mesDesc)";
$stmt = $conn->prepare("INSERT INTO measure(mesDesc) VALUES(?)");

$stmt->bind_param("s", $mesDesc);
$mesDesc = $_POST['mesDesc'];

$stmt->execute();
//$result = $conn->query($sql);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

/*
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Desc: " . $row["description"]. "<br>";
    }
} else {
    echo "0 results";
}
*/

$conn->close();
?>