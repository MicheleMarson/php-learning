<?php
  echo "Small echo<br>";
  ECHO "Big ECHO<br><hr>";
  
  // global scope variable
  $x = 30;
  echo "Number ".$x." is x<br>";
  echo "Number ",$x," is x<br><hr>"; // multiple parameters

  function test1(){
    // echo $x; // cant access the variable
    echo $GLOBALS["x"]; // can access
  }
  test1();

  function test2(){
    $y = 32; // local scope
    echo "This is $y<br><hr>";
  }
  test2();

  $x = 23;
  function test3(){
    global $x;
    $x = $x + 10;
    echo "X is $x inside funct<br><hr>"; 
  }
  test3();
  echo "X is $x outside funct<br><hr>";

  function test4(){
    static $a = 10;
    echo "a is ".$a."<br><hr>";
    $a++;
  }
  test4();
  test4();
  test4();
  print "<p>Output with print</p><hr>";
  
  $int = 4; // integer
  $float = 4.65; // float 
  $str = "String"; //str
  $arr = array("Apple", "Kiwi", "Banana"); // array
  $other_arr[] = "a";
  $other_arr[] = "b";
  $min_arr = ["a", "b", "c"];
  $null = null; // null
  $bool = false or true; // bool
  echo $bool;
  var_dump($other_arr);
  var_dump($min_arr);
  var_dump($str);
  var_dump($x);
?>