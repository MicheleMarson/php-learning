<?php
class Person{
  // public - property can be accessed everywhere
  // private - property can be accessed by class that defines it
  // protected - property can be accessed only within the class
  // itself and by inherited parent classes

  // properties
  public $fname;
  public $lname;
  public $age;

  // assigning values to the property variable
  public function __construct($fname, $lname, $age){
    $this->firstname = $fname;
    $this->lastname = $lname;
    $this->age = $age;
  }

  // create method (function tied to an object)
  public function hello(){
    return "I am ".$this->firstname." ".$this->lastname.", and I am ".$this->age;
  }
}

// Class Inheritance, extend class
class Bob extends Person{
  function hyBob(){
    echo "Bob class\n";
    parent::hello();
  }
}

// create new person 
$person1 = new Person("John", "Smith", 35);
// create another person
$person2 = new Person("Bill", "Sean", 24);

$bob = new Bob("Bob", "Bobins", 42);

var_dump($person1);
echo $person1->hello();
echo "<br>";
echo $person2->hello();
echo "<br>";
echo $bob->hello();
var_dump($bob);

?>