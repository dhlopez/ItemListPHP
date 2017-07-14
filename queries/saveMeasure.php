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

if ($conn->connect_error) {
    echo("Connection failed: " . $conn->connect_error);
}
else if($stmt->execute())
{
    echo "Record Inserted";
}
else
{
    echo "Record Not Inserted";
}

$conn->close();
?>