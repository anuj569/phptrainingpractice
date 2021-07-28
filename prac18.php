<?php
print "<pre>";
$input = array("a" => "green", "red", "b" => "green", "blue", "red");
print_r($input);
$result = array_unique($input);
print_r($result);
$key = array_search('green', $input);
echo $key;
?>
