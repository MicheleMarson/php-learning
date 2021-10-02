<?php
// word count
$str = "Some string here.";
echo "<p>$str char at index 3 is <strong>".$str[3]."</strong></p>";
echo "<p>$str last char is <strong>".$str[strlen($str)-1]."</strong></p>";

// modify last character
$str[strlen($str)-1] = "?";
echo "<p>$str</p>";

// reverse words
echo "<p>".strrev($str)."</p>";

// search text inside string
echo "<p>".strpos($str,"string")."</p>";

// replace text inside string
echo "<p>".str_replace("string", "new string", $str)."</p>"; // (replaceValue,newValue, stringToImplementReplace)

?>