<?php
    //session_destroy();
    
    if (!isset($_SESSION)) { session_start(); } 
    session_destroy();
?>
