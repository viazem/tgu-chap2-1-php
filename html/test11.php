<?php
    session_start();
    
    if (!empty($_GET)) {
	$_SESSION['name'] = $_GET['name'];
	$_SESSION['fam'] = $_GET['fam'];
	$_SESSION['fam2'] = $_GET['fam2'];
    }
?>


<form metod="GET">
    Имя: <input name="name">
    Фамилие: <input name="fam">
    Отчество: <input name="fam2">
    <input type="submit">
</form>
    