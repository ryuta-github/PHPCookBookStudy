<?php

/**
 * ジェネレーターを用いた処理
 */
function yield_example2($limit)
{
    for ($i = 1; $i <= $limit; $i++) {
        yield rand(1, 30);
    }
}

$sum_value = 0;
foreach (yield_example2(500) as $value) {
    print($value . "<br>");
    $sum_value += $value;
}


// 上記例を通常のループで記載
// この例ではメモリの使用量はほぼ変化ないが、配列に保持するなどの処理があれば、yield(イールド)を
// 使ったほうがメモリ使用量が削減できる。

function rand_sample()
{
    return rand(1, 30);
}

$count = 100;
$i = 0;
$sum_value = 0;
while ($i < $count) {
    $value = rand_sample();
    print($value . "<br>");
    $sum_value += $value;
    $i++;
}
