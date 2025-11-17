<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Update</title>
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n = $conn->real_escape_string($_POST['pname']);
    $w = $conn->real_escape_string($_POST['description']);
    $r = (int) $_POST['price'];
    $t = (int) $_POST['stock'];

    // IMPORTANT: Use WHERE to choose which product to update!
    $sql = "UPDATE Product 
            SET Description = '$w', Price = $r, Stock = $t 
            WHERE Pname = '$n'";

    if ($conn->query($sql)) {
        echo "Product updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<p>Update product</p>
<form method="POST">
    <p>Product Name for update<br>
    <input type="text" name="pname" required></p>

    <p>Description<br>
    <input type="text" name="description" required></p>

    <p>Price<br>
    <input type="number" name="price" required></p>

    <p>Stock<br>
    <input type="number" name="stock" required></p>

    <p><button type="submit">Update Product</button></p>
</form>

<a href="index.php">Return to index</a>

</body>
</html>
