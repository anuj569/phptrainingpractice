<?php
session_start();
print "<PRE>";
print_r($_SESSION);
$_SESSION['name'] = 'xyz';
$_SESSION['dept'] = 'tech';
$_SESSION['city'] = 'thane';
print_r($_SESSION);
/*
if(empty($_COOKIE['first_visited'])){
	$dt = date('Y-m-d H:i:s');
	echo "<BR> you are visiting site first time";
	echo "<BR> we are setting your your first visited time to $dt";
	
}
else{
	$dt = $_COOKIE['first_visited'];
	setcookie('first_visited', $dt, time() + 10, "/"); 
	echo "<br>Your first visited time in current session was $dt";
}
*/	
?>