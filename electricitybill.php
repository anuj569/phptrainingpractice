<?php
//Electricity bill
//1-50 units  @ 3.50
//51-150 @ 4.00
//151-250 @ 5.20
//>250 @ 6.50

function sum($a,$b){
	$c = $a + $b;
	//return $c;
}


//$out = sum(45,30);
//print "!!! $c !!!";
//print $out;
//exit;
error_reporting(E_ALL);
ini_set('display_errors', 1);

function get_electricity_bill($unit,$discount=0){
	$consumption = $unit - $discount;
	$billamount=0;
	$x =$consumption;
	while($consumption>0)
	{
		if ($consumption <=50)
		{
			$billamount=($billamount+3.50);
		}
		if ($consumption >=51 && $consumption <=150)
		{
			$billamount=($billamount+4.00);
		}
		if ($consumption >=151 && $consumption <=250)
		{
			$billamount=($billamount+5.20);
		}
		if ($consumption >=251)
		{
			$billamount=($billamount+6.50);
		}
		$consumption--;
	}
	return $billamount;	
}	

$consumption= isset($_GET['unit'])?$_GET['unit']:0;
print get_electricity_bill($consumption,20);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
print get_electricity_bill($consumption);
$consumption = $consumption + 10;
print "<br>";
//@Anuj - how to show figures in decimal i.e. 120.00 

?>
