<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Handling</title>
</head>
<body>
    <h2>Contents of lab6.1.txt</h2>
    <?php
        $lab6_1 = "lab6.1.txt";
        $lab6_2 = "lab6.2.txt";
        $lab5_1 = "lab5.1.txt";

        // Display contents of lab6.1.txt
        if (file_exists($lab6_1)) {
            $lines = file($lab6_1); // Reads file into array of lines
            foreach ($lines as $line) {
                echo htmlspecialchars($line) . "<br>";
            }
        } else {
            echo "<p>lab6.1.txt not found.</p>";
        }
    ?>

    <h2>Appending lab6.2.txt to lab5.1.txt</h2>
    <?php
        if (file_exists($lab6_2) && file_exists($lab5_1)) {
            $content6_2 = file_get_contents($lab6_2);
            file_put_contents($lab5_1, $content6_2, FILE_APPEND); // Append mode
            echo "<p>Content from lab6.2.txt appended to lab5.1.txt.</p>";
        } else {
            echo "<p>One or both files (lab6.2.txt, lab5.1.txt) not found.</p>";
        }
    ?>

    <h2>Updated Contents of lab5.1.txt</h2>
    <?php
        if (file_exists($lab5_1)) {
            $updated = file($lab5_1);
            foreach ($updated as $line) {
                echo htmlspecialchars($line) . "<br>";
            }
        } else {
            echo "<p>lab5.1.txt not found.</p>";
        }
    ?>
</body>
</html>