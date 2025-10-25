<?php
    $name = ' Amy';
    $num = 3;

    print "Hello World! " . $name . "<br>";
    print "Characters in my name: " . $num . "<br>";

    $text = "I love PHP";
    print "My name is ". $name. ",I have to say that ".$text . $name."<br>";

    $num_text = strlen($text);
    print "Number in text is ".$num_text. "<br>";

    $sentence = "My name is ". $name. ",I have to say that ".$text . $name. ".";
    $pos = strpos($sentence, "PHP");
    print "the word php starts at postion ".($pos+1). " of the new string.";

    
?>
