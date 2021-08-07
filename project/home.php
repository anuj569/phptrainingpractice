<?php require_once("header.php"); ?>
<body>
<div class="container">
  <h3 align="center">
    <?php
    $user = "Guest";
    if(!empty($_SESSION['name'])){
        $user = $_SESSION['name'];
    } 
    echo "Welcome $user";
    ?>
    <?php 
      print "<PRE>";
      print_r($_GET);
      print_r($_POST);
      print_r($_REQUEST);
    ?>
  </h3>  
</div>
</body>
</html>
