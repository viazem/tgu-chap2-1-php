<?php

    session_start();

    if (!empty($_SESSION)) {
	echo $_SESSION['num1'] + $_SESSION['num2'];
    } else {
	echo 'Session empty';
    }
    //var_dump($_SESSION);
?>
