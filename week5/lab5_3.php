<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Time Greeting Form</title>
</head>
<body>
    <h2>Enter the Hour (0 - 23)</h2>

    <form method="post" action="">
        <label for="hour">Hour:</label>
        <input type="number" id="hour" name="hour" min="0" max="23" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hour = (int) $_POST["hour"]; 

        if ($hour < 10) {
            echo "<p>Have a good morning!</p>";
        } elseif ($hour < 18) {
            echo "<p>Have a good day!</p>";
        } elseif ($hour < 23) {
            echo "<p>Good evening!</p>";
        } else {
            echo "<p>Switch off the computer!</p>";
        }
    }
    ?>
</body>
</html>
