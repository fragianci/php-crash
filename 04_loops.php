<?php

// for ($i = 0; $i < 10; $i++) {
//   echo "<h1>Hello $i</h1>";
// }

// $i = 0;
// while ($i < 10) {
//   echo "<h1>Hello $i</h1>";
//   $i++;
// }

$pets = ['dog', 'cat', 'bird'];

foreach ($pets as $index => $pet) {
  echo "<h1>$index - Hello $pet</h1>";
}

$person = [
  'name' => 'John',
  'age' => 25,
  'city' => 'New York',
];

foreach ($person as $key => $value) {
  echo "<h1>$key - $value</h1>";
}






?>