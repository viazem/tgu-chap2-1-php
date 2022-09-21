<?php
    
    $_br = '<br>';

    //echo 'привет мир'; // коментарий
    /*
    Многострочный
    комментарий
    */
    //echo 'hello';
    
    $a = 1 + 2; echo $a;echo $_br;
    $b = 3 - 2; echo $b;echo $_br;
    $c = 3 * 2; echo $c;echo $_br;
    $d = 4 / 2; echo $d;echo $_br;
    
    $a = 1 + 2 + 3; echo $a;echo $_br;
    
    $a = 1;
    $b = 2;
    echo $a + $b;echo $_br;
    
    $c = $a + $b;echo $c;echo $_br;
    
    $a = 10;
    $b = 2;
    
    echo $a + $b;echo $_br;
    echo $a - $b;echo $_br;
    echo $a * $b;echo $_br;
    echo $a % $b;echo $_br;
    
    echo $_br;echo $_br;
    
    $c = 10; $d = 5; $result = $c + $d; echo $result;echo $_br;
    
    $a = []; $a[] = 1; $a[] = 2; echo $a[0].' '; var_dump($a);echo $_br;
    
    if ( $a[0] == '01' ) {echo '+';} else {echo '-';}; echo $_br;
    if ( $a[0] == '1' ) {echo '+';} else {echo '-';}; echo $_br;
    if ( $a[0] == 1 ) {echo '+';} else {echo '-';}; echo $_br;
    if ( $a[0] === 1 ) {echo '+';} else {echo '-';}; echo $_br;


    switch ( $a[1] ) {
	case 1: echo '1'; break;
	case 2: echo '2'; break;
	default: echo '...'; break;
    }
    
    echo $_br;
    
?>
