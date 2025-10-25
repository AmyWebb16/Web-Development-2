<!DOCTYPE html PUBLIC "-//W3C//DTD XTML 1.0 Transitional//EN"
"http://ww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml" xml:lan="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
        <title> ternary operator </title>
</head>
<body>
    <?php
        $con1 = (5 < 6);
        $al = false;
        $con2 = ($al == false);
        $con3 = ("123" === 123);

    $result1 = $cond1 ? "Condition 1 is TRUE" : "Condition 1 is FALSE";
    $result2 = $cond2 ? "Condition 2 is TRUE" : "Condition 2 is FALSE";
    $result3 = $cond3 ? "Condition 3 is TRUE" : "Condition 3 is FALSE";

    echo $result1;

    echo $result2;
    
    echo $result3;
    ?>
</body>
</html>


