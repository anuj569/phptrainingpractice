<?php
// exit
// break
// continue
$val = 5;
for($i=1;$i<=10;$i++)
{
	$j = $i * 2;
	echo "Multiply::" . $j."<BR>";
	if($j < 15 && $j > 10)
	continue;		
        echo $i . "<br>";
}

exit;

$val = 5;
for($i=1;$i<=10;$i++)
{
	echo $i . "<br>";
	if($i > 5)
	break;
}
echo "end<br>";
exit;
$x = 1;
//$name = "dummay";
while($name != "") {
  echo "The number is: $x <br>";
  $name = get_user_data($x);
}


do {
  echo "The number is: $x <br>";
  $age = get_user_data($x);
} while ($name != "")
?>
