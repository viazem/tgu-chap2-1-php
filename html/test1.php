<?php
    session_start();
    
    if (!empty($_GET)) {
	//$_SESSION['name'] = $_GET['name'];
	//$_SESSION['age'] = $_GET['age'];
	//$_SESSION['sum'] = $_GET['sum'];
	//$_SESSION['bot'] = $_GET['bot'];
	$_SESSION['nums'] = $_GET;
    }
?>


<form metod="GET">
    Имя: <input name="name">
    Возраст: <input name="age">
    Зарплата: <input name="sum">
    Размер ботинок: <input name="bot">
    <input type="submit">
</form>
