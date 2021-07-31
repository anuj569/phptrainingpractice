<?php
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
print "<PRE>";
$rand_keys = array_rand($input, 2);
print_r($rand_keys);
echo $input[$rand_keys[0]];
echo "<br>";
echo $input[$rand_keys[1]];
?>
