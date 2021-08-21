<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

  $("#div2").fadeIn("slow");
  
  $(".hero").dblclick(function(){
    $("#div1").fadeIn(3000);
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn(3000);
  });


});
</script>
</head>
<body>

<p>Demonstrate fadeIn() with different parameters.</p>

<button id="bt1" class="hero">Click to fade in boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>

<button id="bt2" class="hero">Click to fade in boxes2222 </button><br><br>


<button id="bt3">Click to fade in boxes</button><br><br>
</body>
</html>
