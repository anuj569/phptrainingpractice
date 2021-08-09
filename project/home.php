<?php require_once("header.php"); ?>
<body>
<div class="container">
  <h3 align="center">
    <?php
    //$_SESSION['cart'] = array();
    $user = "Guest";
    if(!empty($_SESSION['name'])){
        $user = $_SESSION['name'];
    } 
    echo "Welcome $user";
    ?>
    <?php 
      //print "<PRE>";
      //print_r($_GET);
      //print_r($_POST);
      //print_r($_REQUEST);
      print_r($_SESSION);
    ?>
  </h3>  
</div>
<a href="home_new.php">Add 1 more product</a>
<br/>
<a href="logout.php">Logout</a>
</body>
</html>
