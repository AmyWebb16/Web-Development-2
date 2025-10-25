<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Loop</title>
</head>
<body>
    <h2>Enter an Integer</h2>

    <form method="post" action="">
        <label for="num">Number:</label>
        <input type="number" id="num" name="num" min="1" required>
        <input type="submit" value="Submit">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = (int) $_POST["num"];

        for ($i = 1; $i <= $num; $i++) {
            echo "<p style='font-size: {$i}em;'>Hello PHP!</p>";
        }
    }
    ?>
</body>
</html>
