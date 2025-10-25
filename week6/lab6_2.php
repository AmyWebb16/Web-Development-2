<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Largest cities</title>
</head>
<body>

    <?php
        $countrys = array(
            "Japan" => "Tokyo",
            "Mexico" => "Mexico City",
            "USA" => "New York City",
            "India" => "Mumbai",
            "Korea" => "Seoul",
            "China" => "Shanghai",
            "Nigeria" => "Lagos",
            "Argentina" => "Buenos Aires",
            "Egypt" => "Cairo",
            "England" => "London"
        );

        echo "<ul>";
        foreach ($countrys as $country => $city){
            echo "<li>$city is in $country</li>";
        }
        echo "</ul>";
    ?>

</body>
</html>