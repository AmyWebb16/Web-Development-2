<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

   $n = $conn->real_escape_string($_POST['ISBN']??null);
   $t = $conn->real_escape_string($_POST['Title']??null);
   $p = $conn->real_escape_string($_POST['username']??null);
   $r = $conn->real_escape_string($_POST['ReservedDate']??null);

    if(!$n||!$p||!$r){
        echo("Error");
    }

    $sql = "SELECT Reserved From books Where ISBN ='$n'";
    $result = $conn->query($sql);
    
    if ($result->num_rows === 0) {
        echo("Book not found.");
    }

    $row = $result->fetch_assoc();

    if($row['Reserved'] == 'Y'){
        echo "this book already reserved";
    }


    $sql2 = "UPDATE books Set Reserved = 'Y' Where ISBN ='$n'";
    if (!$conn->query($sql2)){
        echo("Error Updating");
    }

    $sql3 = "INSERT INTO reservations (ISBN,Username,ReservedDate)Values ('$n','$p','$r')";
    

    if ($conn->query($sql3)) {
        echo "Book has been reserved";
        echo"<a href='MainPage'>Back to Main Page";
    } else {
        echo "Error: ";
    }
}
?>

<h2>Reserve Book</h2>
<form method="POST">
    <p>ISBN<br>
    <input type="text" name="ISBN" ></p>

    <p>Book Title<br>
    <input type="text" name="Title"></p>

    <p>UserName<br>
    <input type="text" name="username"></p>

    <p>Date of Reservation<br>
    <input type="date" name="ReservedDate" ></p>


    <p><button type="submit">Reserve Book</button></p>
</form>

<a href="MainPage.php">Return to Main Page</a>

</body>
</html>
