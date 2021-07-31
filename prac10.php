<?php
//$days = array(87,21,45,"RRRR",65.2,57);
$days = array(87,21,45,"RRRR",array(10,array(78,79,"TTTT")),57);
$days[5] = 100;
$days[6] = 150;
$days[50] = 250;
$days[] = 300;


echo "<br>";
if(isset($days[7]))
{
	echo "exist";
	echo "<br>";
	echo "not available";
}
else
{
	echo "not exist";
	echo "<br>";
	echo "available";
}








echo "<br>";
echo $days[4][1][2];
echo "<br>";
print_r($days[3]);
echo "<pre>";
print_r($days);
//var_dump($days);
?>
