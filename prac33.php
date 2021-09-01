<?php
class Fruit {
  // Properties
  private $name;
  public $color;

  // Methods
  function set_name($name) {
  	$a = 10;
  	if(!is_int($name)){
    	$this->name = $name;
  	}
  }

  function get_name() {
  	$this->name = str_replace("%","",$this->name);
  	$from = array("A","%","&","*");
  	$to = array("0","1","2","3");
  	$this->name = str_replace($from,$to,$this->name);
    return $this->name;
  }
}


$apple = new Fruit();

$apple->color = "Red";

$apple->set_name("Apple");
//$apple->name = 10;
print_r($apple);
echo "!!";
echo $apple->get_name();
echo "!!";
echo "!!";
echo $apple->color;
echo "!!";

$banana = new Fruit();
$banana->name = "banana";
$banana->color = "Yellow";

print_r($banana);

//=========================
/*
$arr = array(2,3);
$arr2 = array(10,11,15,100);
*/
?>