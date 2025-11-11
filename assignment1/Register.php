<?php
include 'MainPage.php'; 

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $username = $_POST['username'];
    $password = $_POST['password'];
    $FirstName = $_POST['FirstName'];
    $Surname = $_POST['Surname'];
    $AddressLineRoad = $_POST['AddressLineRoad'];
    $AddressLineArea = $_POST['AddressLineArea'];
    $City = $_POST['City'];
    $Telephone = $_POST['Telephone'];
    $Mobile = $_POST['Mobile'];

    
    $checkusernamestmt = $conn->prepare("SELECT UserName FROM user WHERE UserName = ?");
    $checkusernamestmt->bind_param("s", $username);
    $checkusernamestmt->execute();
    $checkusernamestmt->store_result();

    if ($checkusernamestmt->num_rows > 0) {
        $message = "Username already exists.";
    } else {
       

        $stmt = $conn->prepare("INSERT INTO user (UserName, Password, FirstName, Surname, AddressLineRoad, AddressLineArea, City, Telephone, Mobile) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $username, $password, $FirstName, $Surname, $AddressLineRoad, $AddressLineArea, $City, $Telephone, $Mobile);

        if ($stmt->execute()) {
            $message = "Account created successfully.";
        } else {
            $message = "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $checkusernamestmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>

<h2>Create Your Account</h2>

<?php if (!empty($message)): ?>
    <p style="color: blue;"><?php echo htmlspecialchars($message); ?></p>
<?php endif; ?>

<form method="post">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>First Name:</label><br>
    <input type="text" name="FirstName"><br><br>

    <label>Surname:</label><br>
    <input type="text" name="Surname"><br><br>

    <label>Address Line (Road):</label><br>
    <input type="text" name="AddressLineRoad"><br><br>

    <label>Address Line (Area):</label><br>
    <input type="text" name="AddressLineArea"><br><br>

    <label>City:</label><br>
    <input type="text" name="City"><br><br>

    <label>Telephone:</label><br>
    <input type="text" name="Telephone"><br><br>

    <label>Mobile:</label><br>
    <input type="text" name="Mobile"><br><br>

    <input type="submit" value="Create Account">
</form>

<p>Already have an account? <a href="login.php">Login</a></p>

</body>
</html>
