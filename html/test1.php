<?php
    // доступ к бд
    $host = 'localhost';
    $user = 'root';
    $password = '123qweASD';
    $db_name = 'test';
    
    $link = mysqli_connect( $host, $user, $password, $db_name );
    
    mysqli_query($link, "SET NAMES 'utf8'");
    
    //$link = mysqli_query( $link, "SELECT * FROM test.users WHERE id>0" );
    
    //$link = mysql_query( $link, "SELECT * FROM " . $table . "users WHERE id>0" );
    
    $link = mysqli_query( $link, "SELECT * FROM test.users WHERE id>0" ) or die(mysqli_error($link));
?> 