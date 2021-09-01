<?php
$str = "anujpandey@gmail";
//if(preg_match('/@/',$str))
//if(preg_match('/.com/',$str))
//if(preg_match('/^([a-z]|\.)+@/',$str))
//if(preg_match('/^[a-z]+\.+[a-z]+@/',$str))
if(preg_match('/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+/',$str))
if(preg_match('/^[a-zA-Z0-9+_.-]+@gmail.com/',$str))
	print "vaid email adderess $str";
else
	print "invalid email adddress $str";
?>
