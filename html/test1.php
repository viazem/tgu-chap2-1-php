<?php
    session_start();
    
    if (!empty($_GET)) {
	$_SESSION['num1'] = $_GET['num1'];
	$_SESSION['num2'] = $_GET['num2'];
    }
?>

<form method="GET">
    <input name="num1">
    <input name="num2">
    <input type="submit">
</form>


