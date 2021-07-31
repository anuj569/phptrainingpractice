<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <!-- <a href="maths_sum.php">Plus Minus</a> -->
  <a href="maths_sum_v4.php">Add & Substract</a>
  <a href="maths_multiply.php">Multiplication</a>
  <a href="tables.php">Tables</a>
  <a href="compare.php">Compare</a>
  <!--<a href="highest_lowest.php">Highest Lowest</a> -->
</div>
<?php 
$user_name = "Guest";
?>
<span style="font-size:30px;cursor:pointer" class="blink" onclick="openNav()">&#9776;</span>
<span style="font-size:30px;cursor:pointer" onclick="openNav()"><?php echo "Welcome, $user_name";?></span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
