<?php
// $numbers = [1, 2, 3, 4, 5];
$numbers = range(1, 5);
$newNumbers = [9, 10];
$arr3 = [];
$arr5 = [];

// var_dump(in_array(2, $numbers));

//  add
$numbers[] = 6;
array_push($numbers, 7, 8);
array_unshift($numbers, 0);
$arr3 = array_merge($numbers, $newNumbers);
$arr4 = [...$numbers, ...$newNumbers];
// print_r($arr4);

$a = ['yellow', 'green', 'red'];
$b = ['apple', 'avocado', 'strawberry'];

$c = array_combine($a, $b);
$keys = array_keys($c);
$values = array_values($c);
// print_r($c);
// print_r($keys);
// print_r($values);

print_r(array_flip($c));

$numbersMapped = array_map(function($number){
    return $number * $number;
}, $numbers);
print_r($numbers);

$sum = array_reduce($numbers, function($carry, $number){
    return $carry + $number;
}, 0);

echo $sum;










?>