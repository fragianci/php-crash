<?php

session_start();
session_destroy();
header('Location: /php-crash/09_sessions.php');

?>