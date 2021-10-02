<?php
// constant -> cant be changed and is global automaticaly
define("STR", "Constant string that can't be changed.");
define("GLOB_STR", "Constant string is global.");
echo STR."<hr>";

// it can be modified
echo strtoupper(STR)."<hr>";

// it can be used in function
function str(){
  echo GLOB_STR."<hr>";
}
str();

?>