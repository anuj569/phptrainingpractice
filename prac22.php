<?php
$text = "The quick brown foxxxxxxxxxxx jumped over the lazy dog.";
$newtext = wordwrap($text, 10, "<br />");

echo $newtext;
?>
