<?php

$a = 1;
$b=2;

function sayHello($name) {
  global $a, $b;
  echo "<h1>Hello $name</h1>";
  echo "a = $a, b = $b";
}

sayHello('John');

?>