<?php
// while loop
$x = 1;
while($x < 10){
  echo "The number is: $x <br>";
  $x++;
}
echo "<hr>";

// do while loop
$x = 6;
do{ // executes at least once
  echo "The number is: $x <br>";
  $x--;
}while($x > 0);
echo "<hr>";

// for loop
// second condition if its false it exits the loop else runs if condition is true
for($x = 0; $x < 5; $x++){ // when $x = 5 -> 5 < 5 it is false and it exist
  echo "x is $x <br>";
}
echo "<hr>";

$arr = ["ananas", "banana", "cherry", "peach"];
// works only on arrays
foreach($arr as $fruit){ // (arrayToLoopThrough, eachSingleValue)
  echo $fruit.", ";
}
?>