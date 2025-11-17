<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Library Home Page</title>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/MainPage.css">

</head>
<body>
<h1>Library System</h1>
<div class="navbar">
  <a href="MainPage.php" class="active">Home</a>
  <a href="show.php">Show all Books</a>
  <a href="add.php">Reserve Books</a>
</div>

<div class = "search">
    <h2>Search book</h2>
   <form action="MainPage.php" method="POST">
    <input type="text" name="search" placeholder="Search Book">
    <button type="submit">Search</button>
</form>
</div>

<div id = "search-results">
   <?php
include 'connection.php';

    if (isset($_POST['search'])) {

    $n = $conn->real_escape_string($_POST['search']);

    $sql = "SELECT * FROM books 
            WHERE BookTitle LIKE '%$n%' 
            OR ISBN LIKE '%$n%' 
            OR Author LIKE '%$n%'";

    $result = $conn->query($sql);

    if ($result->num_rows === 0) {
        echo "<p>No books found matching $n<br></p>";
    }

    echo "<h3>Book Results:</h3>";
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
            <th>ISBN</th>
            <th>BookTitle</th>
            <th>Author</th>
            <th>Edition</th>
            <th>Year</th>
            <th>CategoryID</th>
            <th>Reserved</th>
            <th>Action</th>
          </tr>";

    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['ISBN']."</td>";
        echo "<td>".$row['BookTitle']."</td>";
        echo "<td>".$row['Author']."</td>";
        echo "<td>".$row['Edition']."</td>";
        echo "<td>".$row['Year']."</td>";
        echo "<td>".$row['CategoryID']."</td>";
        echo "<td>".$row['Reserved']."</td>";

      
        if ($row['Reserved'] =="Y") {
            echo "<td><button disabled>Reserved</button></td>";
        } else {
            echo "<td>
                    <form method='POST' action='add.php'>
                        <input type='hidden' name='ISBN' value='{$row['ISBN']}'>
                        <input type='hidden' name='Title' value='{$row['BookTitle']}'>
                        <button type='submit'>Reserve</button>
                    </form>
                  </td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

?>
</div>    
</body>
</html>