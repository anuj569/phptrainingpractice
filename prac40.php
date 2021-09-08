<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//machine IP, username, password
try{
$conn = mysqli_connect("localhost","roo","Admin@123","practice");

// Check connection
if (mysqli_connect_errno()) {
	throw new Exception("unable to connect DB");
  	////echo "Failed to connect to MySQL: " . mysqli_connect_error();
  	//$str = "\nFailed to connect to MySQL: " . mysqli_connect_error() . "::" . $_SERVER['REMOTE_ADDR'];
  	//file_put_contents("files/error_logs.txt", $str, FILE_APPEND);
  	//echo "Something went wrong";
  	//exit();
}
else{
	echo "connected successfully";
}
}
catch  (Exception $x){
	echo "Error Found: ".$x->getMessage()." in file " . $x->getFile() . "on line number " . $x->getLine();    
	exit;
}
//$query = "select * from customer";
$query = "select * from employee_new WHERE id = 1";

$result = mysqli_query($conn, $query);

/*if($result){
	echo "success";
}
else{
	echo "failed " . mysql_error();
}
*/

print_r($result);
if($result){
	echo mysqli_num_rows($result);
	echo "<br/>";
	$row = mysqli_fetch_assoc($result);
	//print_r($row);
	echo "\n";
	echo $row['dues'];
	echo "\n";
	$arr = json_decode($row['dues'],1);
	print_r($arr);
	foreach($arr as $key => $val){
		if(is_array($val)){
			foreach ($val as $key1 => $val1) {
					echo "\n $key.$key1 ============ $val1";
				}	
		}
		else{
			echo "\n $key ============ $val";
		}
	}
	exit;
	/*$row1 = mysqli_fetch_assoc($result);
	print_r($row1);
	
	exit;
	*/

	//while($row = mysqli_fetch_assoc($result)){
	//while($row = mysqli_fetch_array($result)){
	//while($row = mysqli_fetch_row($result)){	
		//print "\n<BR>==============\n";	
		//print_r($row);exit;
		//print $row['firstname'];
	//}
}
else{
	echo "query failed";
}
/*
connect	
fire query

if select
loop read
*/ 
?>
