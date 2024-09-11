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
