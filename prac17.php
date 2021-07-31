<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$search_array = array('first' => null, 'second' => 4);

// returns false
if(isset($search_array['first']))
{
	echo "<br>exists isset";	
}
else
{
	echo "<br>not exists isset";	
}

// returns true
if(array_key_exists('first', $search_array))
{
	echo "<br>array exists isset";	
}
else
{
	echo "<br>not array exists isset";	
}
?>
