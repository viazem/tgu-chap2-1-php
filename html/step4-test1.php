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


<?php if (!isset($_COOKIE['name'])) { /* Первое посещение сайта */ ?>
<form action='' method="POST">
    <p>Здравствуйте. Как Вас зовут? <input type='text' name='name' /></p>
    <p>Когда Вы родились? <input type='date' name='birthdate' /></p>
    <p><input type="submit" name="enter" value="Отправить" /></p>
    <p><input type="submit" name="enter" value="Прекратить" /></p>
</form>
<?php } else { ?>
<form action='' method="POST">
    <p><input type="submit" name="clear" value="Ввести имя еще раз" /></p>
    <p><input type="submit" name="clear" value="Оставить" /></p>
</form>
<?php } ?>


<?php
if (isset($_POST['enter']) && $_POST['enter'] == 'Отправить' && !empty($_POST['name']) && !empty($_POST['birthdate'])) {

var_dump($_POST['enter']);
echo '<br>';
var_dump($_POST['name']);
echo '<br>';
var_dump($_POST['birthdate']);
echo '<br>';

    
    if (!empty($_POST['name'])) {
	setcookie('name', $_POST['name'], time() + 60*60*24*30*12, '/');
	setcookie('birthdate', $_POST['birthdate'], time() + 60*60*24*30*12, '/');
    }

    $name = $_POST['name'];
    
    $date = getdate(strtotime($_POST['birthdate']));
    $day = $date['mday'];
    echo "$day ";
    $month = $date['mon'];
    echo "$month ";
    $year = date('Y');
    echo "$year ";
    
    if ( ! checkbr($day, $month, $year, $name) ) {
	checkbr($day, $month, ($year + 1), $name); // День рождения в следующем году
    }
    
    clearform();
}

if (isset($_POST['enter']) && $_POST['enter'] == 'Прекратить' ) {
    clearcookie();
}

if (isset($_POST['clear']) && $_POST['clear'] == 'Ввести имя еще раз' ) {
    clearcookie();
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
	echo "<br> days=$days";
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

<?php
function clearform() {
    echo 'Clear Form';
    $_POST['name']='';
    $_POST['birthday']='';
}
?>

<?php
function clearcookie() {
    echo 'Забыл';

    if (isset($_POST['name'])) { 
	$_POST['name']=""; 
    }
    
    if (isset($_POST['birthday'])) {
	$_POST['birthday']=""; 
    }
    
    setcookie('name', '', -1, '/');
    
    if (isset($_COOKIE['name'])) {
	var_dump($_COOKIE['name']);
	unset($_COOKIE['name']);
    }
    
    setcookie('birthdate', '', -1, '/');
    
    if (isset($_COOKIE['birthdate'])) {
	var_dump($_COOKIE['birthdate']);
	unset($_COOKIE['birthdate']);
    }
    
    header("Refresh:2");
}
?>