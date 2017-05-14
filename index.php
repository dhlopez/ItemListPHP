<!DOCTYPE html>
<html>
<?php
    include 'header.php';
    include 'database.php';
?>

<body>
<?php
echo "My first PHP script!";
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit" class="btn btn-success">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>
<?php
    include 'footer.php';
?>

</body>
</html>