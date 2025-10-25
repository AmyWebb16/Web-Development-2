<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Largest cities</title>
</head>
<body>
    <h2>Large cities</h2>
    <?php
        $cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Lagos", "Buenos Aires", "Cario", "London");
        
        foreach ($cities as $city) {
            echo $city;
            echo ", ";
        }
    
        sort($cities);
        
        echo "<ol>";
        foreach($cities as $city) {
            echo"<li>$city</li>";
        }
        echo "</ol>";

        $cities[] = "Los Angeles";
        $cities[] = "Calcutta";
        $cities[] = "Osaka";
         $cities[] = "Beijing";
        sort($cities);

        echo "<ul>";
        foreach ($cities as $city){
            echo"<li>$city</li>";
        }
        echo "</ul>";
    ?>

    

</body>
</html>