<?php
include 'connection.php';
 
    $sql = "SELECT * FROM books where Reserved = 'N'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='8' cellspacing='0'>
                <tr>
                    <th>ISBN</th>
                    <th>BookTitle</th>
                    <th>Author</th>
                    <th>Edition</th>
                    <th>Year</th>
                    <th>CategoryID</th>
                    <th>Reserved</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row['ISBN']."</td>
                    <td>".$row['BookTitle']."</td>
                    <td>".$row['Author']."</td>
                    <td>".$row['Edition']."</td>
                    <td>".$row['Year']."</td>
                    <td>".$row['CategoryID']."</td>
                    <td>".$row['Reserved']."</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    $conn->close();
?>

<a href = "add.php">Reserve a Book
