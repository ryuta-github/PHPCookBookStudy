<?php

/**
 * 予測可能な乱数を発生させる
 * mt_srand — メルセンヌ・ツイスター乱数生成器にシードを指定する
 * mt_rand - メルセンヌ・ツイスター乱数を発生させる
 * シードが同じであれば、同じ乱数が生成される
 */

function generate_squence(int $count = 10): array
{
    $array = [];
    for ($i = 0; $i < $count; $i++) {
        $array[] = mt_rand(0, 100);
    }

    return $array;
}

// シードを設定
mt_srand(42);
$first = generate_squence();

mt_srand(42);
$second = generate_squence();

print_r($first);
print_r($second);
