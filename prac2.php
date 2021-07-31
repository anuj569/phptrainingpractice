<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$DBHOST = 12;
define('$DBHOST', '192.168.1.1');
echo DBHOST;
define('$DBHOST', '192.168.1.2');
echo DBHOST;
$t = DBHOST;
?>
