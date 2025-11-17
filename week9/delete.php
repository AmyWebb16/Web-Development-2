<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Delete</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $n = $conn->real_escape_string($_POST['pname']);
    $w = (int) $_POST['id'];

    // Correct DELETE syntax
    $sql = "DELETE FROM Product 
            WHERE Pname = '$n' 
            AND ProductID = $w";

    if ($conn->query($sql)) {
        echo "Product deleted successfully!";
    } else {
        echo "Error deleting product: " . $conn->error;
    }
}
?>

<p>Delete product</p>
<form method="POST">
    <p>Product Name<br>
    <input type="text" name="pname" required></p>

    <p>Product ID<br>
    <input type="text" name="id" required></p>

    <p><button type="submit">Delete Product</button></p>
</form>

<a href="index.php">Return to index</a>

</body>
</html>
