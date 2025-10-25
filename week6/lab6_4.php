<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Paswword generator</title>
</head>
<body>
    <h2>Password is</h2>
</body>
<?php
    function generatePassword($length = 12) {
        // Character pools
        $upper = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $lower = 'abcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?';

        // Ensure at least one character from each category
        $password = $upper[rand(0, strlen($upper) - 1)];
        $password .= $lower[rand(0, strlen($lower) - 1)];
        $password .= $numbers[rand(0, strlen($numbers) - 1)];
        $password .= $symbols[rand(0, strlen($symbols) - 1)];

        // Fill the rest with random characters from all pools
        $all = $upper . $lower . $numbers . $symbols;
        for ($i = strlen($password); $i < $length; $i++) {
            $password .= $all[rand(0, strlen($all) - 1)];
        }

        // Shuffle the final password to mix character types
        $password = str_shuffle($password);

        return $password;
    }

    // Example usage
    echo generatePassword(16);
?>
</html>
    