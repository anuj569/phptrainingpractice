<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
// Relative path and absolute path 
$file_name = "files/logs.txt";
//$str = "I am from Mumbai " . date('Y-m-d H:i:s')."\n";
//file_put_contents($file_name, $str, FILE_APPEND);

$str = file_get_contents($file_name);
$str = str_replace("\n", "\n<BR/>", $str);
print $str;
?>