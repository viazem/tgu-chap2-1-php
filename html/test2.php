<?php

    session_start();

    //if (!empty($_SESSION)) {
    //echo $_SESSION['name'] . $_SESSION['fam'] . $_SESSION['fam2'];
    //} else {
    //echo 'Session empty';
    //}

    echo '<ul>';
    foreach($_SESSION['nums'] as $var) {
        echo '<li> ' . $var . ' </li>';
    }
    echo '</ul>';
    unset($var);

?>
