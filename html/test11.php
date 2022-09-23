<?php
    $avar = array(1,2,3,4);
    $sumall = 0;
    foreach($avar as $var) { $sumall = $sumall + $var; }
    file_put_contents('test3.txt', $sumall );
    
    $var = floatval(file_get_contents('test3.txt'));
    file_put_contents('test3.txt', ($var**2) );
?>
