<?php
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

  
    $stmt = $conn->prepare("SELECT Password FROM user WHERE UserName = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($stored_password);
        $stmt->fetch();

        
        if ($password === $stored_password) {
            $message = "Login successful!";
            header("Location: MainPage.php");
            exit();
          
        } else {
            $message = "Incorrect password.";
        }
    } else {
        $message = "Username not found.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    
</head>
<body>

<h2>Login to Your Account</h2>

<?php if (!empty($message)): ?>
    <p style="color: blue;"><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<form method="post">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <input type="submit" value="Login">
</form>
<a href ="Register.php">CREATE ACCOUNT>



</body>
</html>
