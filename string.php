<?php
// word count
$str = "Some string here.";
echo "<p>$str char at index 3 is <strong>".$str[3]."</strong></p>";
echo "<p>$str last char is <strong>".$str[strlen($str)-1]."</strong></p>";

// modify last character
$str[strlen($str)-1] = "?";
echo $str;

// reverse words
echo strrev($str)."<br>";

// search text inside string
echo strpos($str,"string")."<br>";

// replace text inside string
echo str_replace("string", "new string", $str);

?>