<?php
// Your code here!
$array = ['a', 'b'];

// arrayの末尾に追加したい
array_push($array, 'CC');
var_dump($array);

$array[] = ['DD', 'EE'];
var_dump($array);

// arrayの先頭に追加したい
array_unshift($array, 'ZZZ');
var_dump($array);


// Your code here!

$patient1 = ['name' => "takeda", 'age' => 34];
$patient2 = ['name' => "hero", 'age' => 34];

var_dump([...$patient1, ...$patient2]);
var_dump(array_merge_recursive($patient1, $patient2));


// $array_data = range('A','Z');
// var_dump(array_slice($array_data,1,2));


$array_data = range(1, 5);
var_dump(array_slice($array_data, 4, 2, true));

$array_data1 = ['a' => 'apple', 'b' => 'banana', 20 => 'cola', 'd' => 'caffee'];
var_dump(array_slice($array_data1, 2, 3));
