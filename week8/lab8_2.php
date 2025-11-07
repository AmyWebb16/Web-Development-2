<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lab 8 Question 5</title>
</head>
<body>
    <p>Add User </p>
    <form method = "post">
        <p>Username: <input type ="varchar930)" name ="username"></p>
        <p>Password: <input type = "varchar(30)" name = "password">
        <p>FirstName <input type = "varchar(30)" name = "firstname">
        <p>LastName <input type = "varchar(30)" name = "lastname">
        <p><input type="submit" value="Submit"></p>
    </form>

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

        require_once "lab8_2.php";
        if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['firstname']) && isset($_POST['lastname'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];

            $sql = "INSERT INTO user (Username, Password, FirstName, LastName)
            VALUES ('$username', '$password', '$firstname', '$lastname')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }

    ?>
</body>
</html>
