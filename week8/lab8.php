<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 8</title>
</head>
<body>
     <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "lab_8db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        $sql = "SELECT * FROM Product";
        $result = $conn->query($sql);

        if($result->num_rows >0){
            while($row = $result -> fetch_assoc()){
                echo "ProductID:" . $row["ProductID"] . " PName: " . $row["PName"]. "Description".$row["Description"] ."Price" . $row["Price"]. "Stock" . $row["Stock"]. "<br>";   
                
            }
        } else {
            echo "0 results";       

        }
        $conn->close();


    ?>
</body>
</html>
