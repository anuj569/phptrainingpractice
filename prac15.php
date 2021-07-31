<?php
$amount = '100000';
setlocale(LC_MONETARY, 'en_IN');
$amount = money_format('%!i', $amount);
echo $amount;
?>
