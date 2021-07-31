<?php
$dt = date('Y-m-d H:i:s');
echo $dt;
echo "<br>";
$dt = date('y/d/m H:i:s - D');
echo $dt;
echo "<br>";

$input = "2021/5/2 22:52:51";
echo $input;
echo "<br>";
$ts =  strtotime($input . "-3 days");
echo date('Y-m-d H:i:s',$ts);
?>
