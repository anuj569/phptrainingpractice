<?php
print "<PRE>";
echo $input[$rand_keys[0]];
$num = 10;
//$str = "hello world, $num is highest value \n and you you \"have to score this";
$str = '#@hello world, $num is highest value \n and you you \'have to score this,';
echo $str;
echo "<br>";
echo substr($str,-3);exit;
echo "<br>";
echo substr($str,0,20);
echo "<br>";
echo strlen($str);
echo "<br>";
//echo str_replace("HIGHEST","lowest",$str);
echo str_ireplace("HIGHEST","lowest",$str);
echo "<br>";
echo ltrim($str,",#@");
echo "<br>";

$findme = '#sdas';
$pos = strpos($str, $findme);
if ($pos === false) 
{
    echo "not Matched -- $pos";
} else 
{
    echo "Matched -- $pos";
}

echo "<br>";
$enc_val =  base64_encode($str);
echo $enc_val;

echo "<br>";
echo base64_decode($enc_val);

echo "<br>";
echo md5($str);

echo "<br>";
$input1 = "sagar";
echo soundex($input1);
echo "<br>";
$input2 = "deepa";
echo soundex($input2);

echo "<br>";
echo str_pad("15",2,"0",STR_PAD_LEFT);
echo "<br>";
echo str_pad("HHH",10,".",STR_PAD_RIGHT);
?>
