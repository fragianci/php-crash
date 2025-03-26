<?php

setcookie('name', 'John', time() + 86400 * 30);

echo $_COOKIE['name'];

?>