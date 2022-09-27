<?php

echo 'Спросите дату рождения пользователя.<br> 
При следующем заходе на сайт напишите сколько дней осталось до его дня рождения.<br> 
Если сегодня день рождения пользователя - поздравьте его!<br><br>';

?>

<?php
    if (
	(!isset($_COOKIE['count_visit']) or $_COOKIE['count_visit'] == 1) or
	(!isset($_COOKIE['name']) or empty($_COOKIE['name'])) or
	(!isset($_COOKIE['birthdate']) or empty($_COOKIE['birthdate']))
	) { 
    /* Первое посещение сайта */ 
?>

<form action='' method="POST">
    <p>Здравствуйте. Как Вас зовут? <input type='text' name='name' /></p>
    <p>Когда Вы родились? <input type='date' name='birthdate' /></p>
    <p><input type="submit" /></p>
</form>

<?php 
	setcookie('name', $_POST['name']);
	$_COOKIE['name'] = $_POST['name'];
	
	setcookie('birthdate', $_POST['birthdate']);
	$_COOKIE['birthdate'] = $_POST['birthdate'];
	
	if (!isset($_COOKIE['count_visit'])) {
	    setcookie('count_visit', 1);
	    $_COOKIE['count_visit'] = 1;
	} else {
	    setcookie('count_visit', $_COOKIE['count_visit'] + 1);
	    $_COOKIE['count_visit'] = $_COOKIE['count_visit'] + 1;
	}
	
	echo '1';
	
	var_dump($_COOKIE['count_visit']);
	var_dump($_COOKIE['name']);
	var_dump($_COOKIE['birthdate']);
	
	$_POST['name'] = '';
	$_POST['birthdate'] = '';
	
    } else {
    
	echo '2';
    
	if ( !empty($_COOKIE['name']) && !empty($_COOKIE['birthdate'])) {
	    
	    echo '3';
	    
	    setcookie('count_visit', $_COOKIE['count_visit'] + 1);
	    $_COOKIE['count_visit'] = $_COOKIE['count_visit'] + 1;

	    $name = $_COOKIE['name'];
    
	    $date = getdate(strtotime($_COOKIE['birthdate']));
	    $day = $date['mday'];
	    $month = $date['mon'];
	    $year = date('Y');
    
	    if ( ! checkbr($day, $month, $year, $name) ) {
	        checkbr($day, $month, ($year + 1), $name); // День рождения в следующем году
	    }
	}
	
    }
?>

<?php
/*
Проверяем дату
Возвращаем значение treu если скоро день рождения
Выводим сообщение о событии
*/
function checkbr($day, $month, $year, $name) {
    $days = -1;
    $now = strtotime(date('d.m.Y'));
    if (checkdate($month, $day, $year)) {
	$dr = mktime(0, 0, 0, $month, $day, $year);
	$difference = $dr - $now;
	$days = floor($difference / 86400);
	if ($days > 0 ) {
	    echo "<br>$name, осталось дней до дня рождения $days" ;
	}
	if ( $days == 0 ) {
	    echo "<br>Сегодня Ваш день рождения, поздравляем $name!";
	}
    }

    return ($days >= 0);
}
?>
