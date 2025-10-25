<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Capital</title>
</head>
<body>
    <h2>Capital, Country, </h2>
</body>
<?php
    $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

    asort($ceu);

    echo "<ol>";
    foreach ($ceu as $ceu => $city){
       echo "<li>$city is in $ceu</li>";
    }
    echo "</ol>";
?>

</html>