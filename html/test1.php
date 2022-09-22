<?php
    session_start();
    $_SESSION['test'] = 'abcde'; // пишем в сессию
    echo $_SESSION['test'];
?>
