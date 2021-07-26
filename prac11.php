<?php
$days = array(87,21,45,"RRRR",85,57);
print "<pre>";
print_r($days);exit;
$end_val = end($days);
$end_key = key($days);
echo $end_key;
echo "<BR>";
for($i=0;$i<=$end_key;$i++){
echo $days[$i] . "------";	
}

echo "<BR>";
$arr_count = count($days);
echo $arr_count;
echo "<BR>";
for($i=0;$i<$arr_count;$i++){
echo $days[$i] . "------";
}
echo "<BR>";
foreach($days as $key1 => $val1){
	echo $key1 ."==>".$val1 . "!!!" .$days[$key1] ."------";
}
?>
