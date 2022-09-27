<?php

# Спросите дату рождения пользователя.
# При следующем заходе на сайт напишите сколько дней осталось до его дня рождения.
# Если сегодня день рождения пользователя - поздравьте его!

# https://youtu.be/RVlNnfQxwaY

#$cookie_name = "user";
#$cookie_value = "cookie_user";
#setcookie($cookie_name, $cookie_value, time() + 86400);

$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter", $counter, time() + 86400);
echo $counter;

$name = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";

$br = isset($_COOKIE['br']) ? $_COOKIE['br'] : "";


#setcookie("counter", "", time() - 3600);
?>


<?php
#if (!isset($_COOKIE[$cookie_name])) {
#    echo "cookie named $cookie_name";
#    echo "cookie value $cookie_value";
#}

#setcookie($cookie_name, $cookie_value, time() - 3600 );

#if (count($_COOKIE)>0) {
#    echo "Cookie are enable";
#} else {
#    echo "Cookie are disable";
#}
?>

<?php
#if ($counter < 2) {
?>

<!-- ************************************ -->
<form action='' method="POST">
    <p>Здравствуйте. Как Вас зовут? <input type='text' name='name' /></p>
    <p>Когда Вы родились? <input type='date' name='br' /></p>
    <p><input type="submit" /></p>
</form>
<!-- ************************************ -->

<?php
#}

if (isset($_POST['name'])) { echo "<br>_POST[name] = " . $_POST['name']; } else { echo "<br>_POST[name] are unset" ;}

$name = isset($_POST['name']) ? $_POST['name'] : "";

if (isset($_COOKIE['name'])) { echo "<br>_COOKIE[name] = " . $_COOKIE['name']; } else { echo "<br>_COOKIE[name] are unset" ;}

setcookie("name", $name, time() + 86400);

echo "<br>\$name = $name";



if (isset($_POST['br'])) { echo "<br>_POST[br] = " . $_POST['br']; } else { echo "<br>_POST[br] are unset" ;}

$br = isset($_POST['br']) ? $_POST['br'] : "";

if (isset($_COOKIE['br'])) { echo "<br>_COOKIE[br] = " . $_COOKIE['br']; } else { echo "<br>_COOKIE[br] are unset" ;}

setcookie("br", $br, time() + 86400);

echo "<br>\$br = $br"; // Пустая дата 0001-01-01

echo "<br>(strtotime($br)) = " . strtotime($br);



if ($counter > 1 && ! empty($name) && ! empty($br) ) {
    $date = getdate(strtotime($br)); // преобразовал пустую дата в 01.01.2022
    
    echo "<br>\$date = " . $date['mday'] . ' ' . $date['mon'] . ' ' . $date['year'];
    
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
    echo "<br>\$day = $day \$month = $month \$year = $year \$name = $name";
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

#echo "пустая дата = " . date( 'j F Y', 0); // 1 January 1970
#echo "пустая дата = " . strtotime("");

#if (empty(date( 'j F Y', 0)))
#{echo "пустая дата = (empty(date( 'j F Y', 0)))"; }
#else
#{echo "дата не пустая date( 'j F Y', 0))"; }

#if (empty(strtotime(""))) 
#{echo "пустая дата = (strtotime(\"\"))"; }
#else
#{echo "дата не пустая"; }

#echo ;

?>
