<?php
/*

Давайте запишем через setcookie какую-то куку и сразу выведем ее на экран. 
В этом случае при первом заходе в $_COOKIE для нашей куки будет null, 
а при уже обновлении страницы - значение куки:

*/

    //setcookie('str', 'eeee');
    //echo 'Записал куку';
    //var_dump($_COOKIE['str']); // сначала null, а потом 'eee'

/*

Чтобы кука каждый раз не отправлялась в браузер, можно запись куки сделать 
внутри условия. Если такой куки нет, то запишем ее:

*/

/*
    if (!isset($_COOKIE['str'])) { // если куки нет
	setcookie('str', 'eee');
	$_COOKIE['str'] = 'eee';
    } else {
	echo '<br>Кука есть';
    }
    
    echo $_COOKIE['str']; // выведет 'eee'
*/

/* Давайте сделаем счетчик обновления страницы: */

/*
    if (!isset($_COOKIE['counter'])) { // первый заход на страницу
	setcookie('counter', 1);
	$_COOKIE['counter'] = 1;
    } else {
	setcookie('counter', ++$_COOKIE['counter']);
    }
    
    echo $_COOKIE['counter'];
*/

/* сколько времени прошло с момента первого захода на страницу */

    if (!isset($_COOKIE['time_visit'])) {
	setcookie('time_visit', intval(time()));
    } else {
	$timelast = time() - intval($_COOKIE['time_visit']);
	echo 'Со времени первого визита прошло' . date("s", $timelast) . 'сек';
    }


?>