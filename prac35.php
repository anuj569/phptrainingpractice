<?php
/*
$url = 'https://geocode.xyz/Hauptstr.,+57632+Berzhausen?json=1';
echo "hello 1<br>";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch); 
print $output; 
echo "<BR>hello 2<br>";   
*/

$fields = array(
    'field_name_1' => 'Value 1',
    'field_name_2' => 'Value 2',
    'field_name_3' => 'Value 3'
);

echo "<BR/>";
$url = 'http://localhost/prashant/prac32.php';
echo "hello 2<br>";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
print $output; 
echo "<BR>hello 3<br>";
curl_close($ch); 

?>


