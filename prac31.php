<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    i = 20;
    //console.log("hellow" + i);
    $("input").keydown(function(){
    $("input").css("background-color", "yellow");
    //$("p").html("You have pressed the key");
    $("p").toggle();
  });
  $("input").keyup(function(){
    $("input").css("background-color", "pink");
    //$("p").html("You have left the key")
    $("p").toggle();
  });

  $("#bt1").click(function(){

     $.ajax(
            { url: "prac32.php", 
              type: "POST",
              data: "name=anuj&dept=tech",
              async: false,
              success: function(result){
                $("#div1").html(result);
                //out = '<tr><td>DDDDD</td></tr><tr><td>dddd</td></tr><tr><td>RRRRRr</td></tr><tr><td>RRRRRr</td></tr>';
                $("table").html(result);
                }}
        );
        $("#bt1").html("Resuest is succesful");

    
    
  });
});

  

</script>
</head>
<body>
<?php print_r($_GET); ?>
Enter your name: <input type="text" >

<p>Enter your name in the input field above. It will change background color on keydown and keyup.</p>

<button id="bt1" class="hero">Click to refresh table</button><br><br>


<table border="1">
    <tr><td>RRRRRr</td></tr>
    <tr><td>RRRRRr</td></tr>
    <tr><td>RRRRRr</td></tr>
    <tr><td>RRRRRr</td></tr>
</table>

</body>
</html>
