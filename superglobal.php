<?php
// global
$x = 3;
$y = 6;

function add(){
  $GLOBALS["x"] = $GLOBALS["x"] + $GLOBALS["y"]; 
}

add();
echo $x;
echo "<hr>";

// other globals
echo $_SERVER["PHP_SELF"];
echo "<hr>";
echo $_SERVER["SERVER_NAME"];
echo "<hr>";

?>