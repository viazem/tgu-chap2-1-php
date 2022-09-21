<!doctype html>
<html>
    <head>
	<meta charset="utf-8">
	<title>"Моя первая программа"</title>
	<?php
	    error_reporting(E_ALL);
	    ini_set('display_errors', 'on');
	    mb_internal_encoding('UTF-8');
	
	    include 'code.php';
	?>
    </head>
    <body>
	<?php
	    echo 'Моя первая программа<br>';
	?>
	<?php
	    //Массив работников:
	    $a = ['Коля'=>200, 'Вася'=>300, 'Петя'=>400];
	    echo 'Васина зарплата:'.$a['Вася'].'<br>'; // выведет 300
	?>
    </body>
</html>
