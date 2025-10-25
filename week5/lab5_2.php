<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>While loops</title>
</head>

<body>
    <?php

    echo "Using while loop:<br>";
    $num = 5;
    while ($num <= 40) {
        echo $num . " ";
        $num += 5;
    }

    echo "Using do...while loop:<br>";
    $num = 5;
    do {
        echo $num . " ";
        $num += 5;
    } while ($num <= 40);   
    
    
    $programmingLanguagesArray = ["PHP", "C++", "C#", "Python", "Java"];

    foreach ($programmingLanguagesArray as $language) {
    echo $language . "<br>";}

    $iterator = new ArrayIterator($programmingLanguagesArray);
    foreach ($iterator as $language) {
    echo $language . "<br>";
}
    ?>

</body>
</html>

