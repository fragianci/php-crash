<?php
/* - PHP Data Types - */
/*
- String: Series of characters surrounded by quotes
- Integer: Whole numbers
- Float: Decimal numbers 
- Boolean: true or false
- Array value: Special variable, which can hold more than one
- Object: A class
- NULL: Empty variable
- Resource: Special variable that holds a resource
*/

/* - Variables rules - */
/*
- Start with $
- Start with a letter or an underscore
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "John";
$age = 25;

// echo '<h1>' . $name . " is " . $age . " years old</h1>";

echo "<h1>Hello $name, you are $age years old</h1>";

// define('NAME', 'John');

// echo NAME;
// Simple array
$numbers = [1, 2, 3, 4, 5];

// echo $numbers[0];

// Associative array
$person = [
  'name' => 'John',
  'age' => 25,
];

echo $person['name'];


?>