<?php

# Спросите дату рождения пользователя.
# При следующем заходе на сайт напишите сколько дней осталось до его дня рождения.
# Если сегодня день рождения пользователя - поздравьте его!

$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter, time() + 86400);

$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";
$br = isset($_COOKIE['br']) ? $_COOKIE['br'] : "";

?>


<!-- ************************************ -->
<form action='' method="POST">
    <p>Здравствуйте. Как Вас зовут? <input type='text' name='name' /></p>
    <p>Когда Вы родились? <input type='date' name='br' /></p>
    <p><input type="submit" /></p>
</form>
<!-- ************************************ -->

<?php
$name = isset($_POST['name']) ? $_POST['name'] : "";
setcookie("name", $name, time() + 86400);

$br = isset($_POST['br']) ? $_POST['br'] : "";
setcookie("br", $br, time() + 86400);

if ($counter > 1 && ! empty($name) && ! empty($br) ) {
    $date = getdate(strtotime($br));

    $day = $date['mday'];
    $month = $date['mon'];
    $year = date('Y');

    if ( ! checkbr($day, $month, $year, $name) ) {
	 checkbr($day, $month, ($year + 1), $name); // День рождения в следующем году
    }
}

/*
Проверяем дату
Возвращаем значение true если скоро день рождения
Выводим сообщение о событии
*/
function checkbr($day, $month, $year, $name) {
    $days = -1;
    $now = strtotime(date('d.m.Y'));
    if (checkdate($month, $day, $year) && !empty($name)) {
	$dr = mktime(0, 0, 0, $month, $day, $year);
	$difference = $dr - $now;
	$days = floor($difference / 86400);
	if ($days > 0 ) {
	    echo "<br>Здравствуйте $name, осталось дней до дня рождения $days" ;
	}
	if ( $days == 0 ) {
	    echo "<br>Здравствуйте $name, cегодня Ваш день рождения, поздравляем Вас!";
	}
    }
    return ($days >= 0);
}
?>

<?php
#echo "<br><br>Coockie is unset";
#setcookie("counter", "", time() - 3600 );
#setcookie("name", "", time() - 3600 );
#setcookie("br", "", time() - 3600 );
#unset($_COOKIE['counter']);
#unset($_COOKIE['name']);
#unset($_COOKIE['br']);
#header("Refresh:1");
?>
