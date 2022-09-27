<?php

echo 'Спросите дату рождения пользователя.<br> 
При следующем заходе на сайт напишите сколько дней осталось до его дня рождения.<br> 
Если сегодня день рождения пользователя - поздравьте его!<br><br>';

?>

<?php 
    if (isset($_COOKIE['name'])) {
	echo $_COOKIE['name'] . '<br>';
	//unset($_COOKIE['name']);
	//unset($_COOKIE['bithdate']);
    }
?>


<?php //if (!isset($_COOKIE['name'])) { /* Первое посещение сайта */ ?>
<form action='' method="post">
    <p>Здравствуйте. Как Вас зовут? <input type='text' name='name' /></p>
    <p>Когда Вы родились? <input type='date' name='birthdate' /></p>
    <p><input type="submit" name="enter" value="Отправить" /></p>
    <p><input type="submit" name="cancel" value="Прекратить" /></p>
</form>
<?php //} ?>


<?php
if (isset($_POST['enter']) /* && !empty($_POST['name']) && !empty($_POST['birthdate'])*/) {
    
    //echo 'Enter' . $_POST['enter'];

    if (!empty($_POST['name'])) {
	setcookie('name', $_POST['name'], time() + 60*60*24*30*12);
	setcookie('birthdate', $_POST['birthdate'], time() + 60*60*24*30*12);
    }

    //$name = $_POST['name'];
    $name = 'Иванов';
    $now = time();

    //$date = getdate(strtotime($_POST['birthdate']));
    $date = getdate(strtotime('28.09.2022'));
    $day = $date['mday'];
    echo "$day ";
    $month = $date['mon'];
    echo "$month ";
    //$year = date('Y') + 1; /* Следующий год */
    $year = date('Y');
    echo "$year ";
    
    if (checkdate($month, $day, $year)) {
	$dr = mktime(0, 0, 0, $month, $day, $year);
	$difference = $dr - $now;
	$days = floor($difference / 86400);
	echo "<br>Осталось дней до дня рождения $days дней" ;

	$datenow = getdate($now); /* Для проверки совпадения с текущей датой */
	if ( 
	    $datenow['mday'] == $date['mday'] &&
	    $datenow['mon'] == $date['mon']
	) {
	    echo "<br>Сегодня Ваш день рождения, поздравляем $name!";
	}
    }
}
?>

<?php
/*
Проверяем дату
Возвращаем значение > 0 если скоро день рождения
*/
function checkbr($day, $mon, $year, $now) {
    $days = 0;
    if (checkdate($month, $day, $year)) {
	$dr = mktime(0, 0, 0, $month, $day, $year);
	$difference = $dr - $now;
	$days = floor($difference / 86400);
	echo "<br>Осталось дней до дня рождения $days дней" ;
    }
    return $days;
}
?>