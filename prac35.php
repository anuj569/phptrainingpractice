<?php

//$url = 'https://www.cartrade.com/buy-used-cars/mumbai/mercedes-benz/c-class/d2484999.html?dc=0';
$url = 'https://www.cartrade.com/buy-used-cars/mumbai/mercedes-benz/c-class/d2506149.html?dc=0';
echo "hello 1<br>";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch); 
//print $output; 
echo "<BR>hello 2<br>";   

$out = array();
if(preg_match_all('|<td class="vt1">(.+?)</td><td>(.+?)</td>|',$output,$matches)){
	print_r($matches);
	foreach($matches[1] as $key => $val){
		echo $matches[1][$key] . " => ". $matches[2][$key] . "\n";
		
	}
}
else{
	echo "no data found";
}

/*
$fields = array(
    'field_name_1' => 'Value 1',
    'field_name_2' => 'Value 2',
    'field_name_3' => 'Value 3'
);
/*
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
*/

/*
$fields = array(
    'username' => 'anuj',
    'password' => '1234'
);

echo "<BR/>";
$url = 'http://localhost/prashant/project/login.php';
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
*/

?>


