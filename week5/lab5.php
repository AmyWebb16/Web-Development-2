<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Greeting Example</title>
</head>

<body>
    <?php
    if (date("H") < 10) {
        echo "Have a good morning!\n";
    } elseif (date("H") < 20) {
        echo "Have a good day!\n";
    } else {
        echo "Have a good night!\n";
    }

   
    
    ?>
</body>
</html>

