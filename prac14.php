<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>HTML Table</h2>
<?php
$arr = array(
                50 => array("name"=>"AAA","dept" => "tech"),
                75 => array("name"=>"BBB","dept" => "tech"),
                45 => array("name"=>"CCC","dept" => "ops"),
                23 => array("name"=>"DDD","dept" => "ops"),
                10 => array("name"=>"EEE","dept" => "hr"),
                100 => array("name"=>"FFF","dept" => "tech"),
        );

?>
<table>
  <tr>
    <th>ID</th>
    <th>NAME</th>
    <th>DEPT</th>
  </tr>
<?php 
foreach($arr as $key => $val) 
{
?>	
  <tr>
    <td><?php echo $key;?></td>
    <td><?php echo $val['name'];?></td>
    <td><?php echo $val['dept']?></td>
  </tr>
<?php
} 
?>
</table>

</body>
</html>
