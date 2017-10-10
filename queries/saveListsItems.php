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

$itemID = (is_numeric($_POST['itemID']) ? (int)$_POST['itemID'] : 0);
$itemQty = (is_numeric($_POST['itemQty']) ? (int)$_POST['itemQty'] : 0);
$measureID = (is_numeric($_POST['measureID']) ? (int)$_POST['measureID'] : 0);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//$sql = "insert into item list";
$stmt = $conn->prepare("INSERT INTO listsitems(listid, qty, lineNo, measureid, itemid) VALUES(3,?,1,?,?)");
$stmt->bind_param("iii", $itemQty, $measureID, $itemID);

// Check connection
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