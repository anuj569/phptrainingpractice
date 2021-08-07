<?php
//setcookie('is_cookie_set', 1, time() + 60*30, "/");

print_r($_COOKIE);

if(empty($_COOKIE['first_visited'])){
	$dt = date('Y-m-d H:i:s');
	echo "<BR> you are visiting site first time";
	echo "<BR> we are setting your your first visited time to $dt";
	setcookie('first_visited', $dt, time() + 10, "/");
	setcookie('username', 'AAA', time() + 1, "/"); 
}
else{
	$dt = $_COOKIE['first_visited'];
	setcookie('first_visited', $dt, time() + 10, "/"); 
	echo "<br>Your first visited time in current session was $dt";
}	
?>