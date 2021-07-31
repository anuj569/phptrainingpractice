<?php
$result = 91;

if($result >= 75)
{
	if($result >= 90)
	{
		echo "Merit<br>";
	}
	else
	{
		echo "Distinction<br>";
	}
	echo "Congratulations<br>";	
}
else if($result >= 60)
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
