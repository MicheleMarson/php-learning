<?php
// indexed array
$color = array("blue", "green", "red");
echo "Colors in array are ".$color[0].", ".$color[1].", ".$color[2].".<hr>";

// array length
echo "\$color array length is ".count($color)."<hr>";

// loop through index array
for($x = 0; $x < count($color); $x++){
  echo $color[$x]."<br>";
}
echo "<hr>";

// associative array
$score = array("John"=>40, "Bob"=>53, "Sam"=>23);
echo "Bob scored ".$score["Bob"]."/100<hr>";

// loop throughassociative array
foreach($score as $key => $value){
  echo "Key=".$key.",Value=".$value."<br>";
}
echo "<hr>";

// multidimentional array
$grades = [
  ["John", 43, 97],
  ["Bob", 58, 76],
  ["Sam", 73, 34],
];
// var_dump($grades);
echo $grades[0][0].": Test 1 - ".$grades[0][1].", Test 2 - ".$grades[0][2]."<br>";
echo $grades[1][0].": Test 1 - ".$grades[1][1].", Test 2 - ".$grades[1][2]."<br>";
echo $grades[2][0].": Test 1 - ".$grades[2][1].", Test 2 - ".$grades[2][2]."<br>";
echo "<hr>";

// sorting
$color = array("gray", "yellow", "white","blue", "green", "red");
sort($color);
for($x = 0; $x < count($color); $x++){
  echo $color[$x]."<br>";
}
echo "<hr>";

$color = array("gray", "yellow", "white","blue", "green", "red");
rsort($color);
for($x = 0; $x < count($color); $x++){
  echo $color[$x]."<br>";
}
echo "<hr>";

// associative array sort by value
$score = array("John"=>40, "Bob"=>53, "Sam"=>23);
asort($score); // arsort for descending order
foreach($score as $key => $value){
  echo "Key=".$key.",Value=".$value."<br>";
}
echo "<hr>";

// associative array sort by key
$score = array("John"=>40, "Bob"=>53, "Sam"=>23);
ksort($score); // krsort for descending order
foreach($score as $key => $value){
  echo "Key=".$key.",Value=".$value."<br>";
}
echo "<hr>";

?>