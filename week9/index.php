<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURD</title>
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
        echo "Connected successfully";

        $sql = "SEELECT UserID, UserName,Password,email from user";


    ?>

    <a href ="show.php" > show product>
    <a href= "add.php" > add new product >
    <a href ="update.php" > update new product>
    <a href ="delete.php" > delete product>


