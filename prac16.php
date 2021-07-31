<?php
$arr = array(
                50 => array("name"=>"AAA","dept" => "tech"),
                75 => array("name"=>"BBB","dept" => "tech"),
                45 => array("name"=>"CCC","dept" => "ops"),
                23 => array("name"=>"DDD","dept" => "ops"),
                10 => array("name"=>"EEE","dept" => "hr"),
                100 => array("name"=>"FFF","dept" => "tech"),
        );
$i = "Mumbai";
print "<PRE>";
//echo $i[1];
if(is_array($i)) 
{
//	echo "array";	
}
else
{
//	echo "not array";
}
//$arr1 = array_values($arr);
//print_r($arr1);
//print_r(array_values($arr));
//echo "SELECT * from dues where empID in (" . implode(',',array_keys($arr)) . ")";

$out = "";
foreach($arr as $key => $val) 
{
	$out = $out . ",$key";
}
$out = trim($out,",");
echo $out;
// SELECT * from dues where empID in (50,75,45,23,10,100);
?>
