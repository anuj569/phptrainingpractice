<?php
$sports = 0;
$result = 65;

if($result >= 90 )
{
	echo "Merit<br>";
	echo "Congratulations<br>";	
}
else if($result >= 75)
{
	echo "Distinction<br>";
	echo "Congratulations<br>";	
}
else if($result >= 60 && $sports == 1)
{
	echo "First Class<br>";
}
else if($result >= 40)
{
	echo "Second Class<br>";
}
else
{
	echo "fail<br>";
}
echo "End of the application";
?>
