<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURD Show</title>
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
        

    
   $sql = "SELECT * FROM Product";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr>
                    <th>ProductID</th>
                    <th>PName</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['ProductID']."</td>
                    <td>".$row['PName']."</td>
                    <td>".$row['Description']."</td>
                    <td>".$row['Price']."</td>
                    <td>".$row['Stock']."</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();

    ?>
    <a href= "index.php">cancel>
    </body>
    </html>