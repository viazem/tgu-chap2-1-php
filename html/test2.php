<?php
$var = floatval(file_get_contents('test1.txt'));
$var1 = floatval(file_get_contents('test2.txt'));
echo $var + $var1;
?>