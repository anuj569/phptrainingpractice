<?php
//$arr = array("a" => "apple","b" => "ball", "c" => "cat");
$emp_id = 75;
$arr = array(
		50 => array("name"=>"AAA","dept" => "tech"),
		75 => array("name"=>"BBB","dept" => "tech"),
		45 => array("name"=>"CCC","dept" => "ops"),
		23 => array("name"=>"DDD","dept" => "ops"),
		10 => array("name"=>"EEE","dept" => "hr"),
		100 => array("name"=>"FFF","dept" => "tech"),
	);
//print "<pre>";
//print_r($arr);

if(isset($arr[$emp_id])) 
{
	//echo "Name of the emp is ". $arr[$emp_id]['name'];	
	echo "Name of the emp is {$arr[$emp_id]['name']}";	
	echo "<br>Dept of the emp is {$arr[$emp_id]['dept']}";	
}
else
{
	echo "Emp Id $emp_id does not exists";
}
?>
