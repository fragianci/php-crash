<?php

$age = 11;

if ($age >= 18) {
  echo "You are an adult";
} elseif ($age >= 13) {
  echo "You are a teenager";
} else {
  echo "You are not an adult";
}

switch ($age) {
  case 18:
    echo "You are an adult";
    break;
  case 13:
    echo "You are a teenager";
    break;
}



?>