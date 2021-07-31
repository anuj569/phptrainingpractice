<?php require_once("header.php"); ?>
<body>
<div class="container">
  <h3 align="center">You are here
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
