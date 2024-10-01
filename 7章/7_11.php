<?php
//関数を用いたソート

$sample_data = [4, 1, 3, 5];


$data = [
    ['first' => 'takeda', 'last' => 'ryutaro'], //3
    ['first' => 'hirakawa', 'last' => 'hanako'], //1
    ['first' => 'takeda', 'last' => 'aiko'], //2
];

function sorter($a, $b): int
{
    var_dump([$a['first'], $a['last']] <=> [$b['first'], $b['last']]);
    return [$a['first'], $a['last']] <=> [$b['first'], $b['last']];
}

var_dump($data);
uasort($data, 'sorter');
var_dump($data);
