<?php

$file_name = "hello.csv";
header("Content-Description: File Transfer"); 
header("Content-Type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=\"". $file_name . "\""); 
?>
