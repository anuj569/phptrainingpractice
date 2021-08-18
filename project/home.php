<?php require_once("header.php"); ?>
<?php print_r($_SESSION);exit;?>
<body>
<?php require_once("left_menu.php"); ?>  
<div class="container">
  <h3 align="center">
    List Of Employees<?php print_r($_SESSION); ?>
  </h3>
  <BR/>  
    <?php 
      //print "<PRE>";
      //print_r($_GET);
      //print_r($_POST);
      //print_r($_REQUEST);
      //print_r($_SESSION);
    ?>
  
   <div class="bd-example">
        <table class="table table-sm table-bordered">
          <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry the Bird</td>
            <td>Larry the Bird</td>
            <td>@twitter</td>
          </tr>
          </tbody>
        </table>
        </div>
<!-- 
<a href="home_new.php">Add 1 more product</a>
<br/>
<a href="logout.php">Logout</a>
-->
</div>
</body>
</html>
