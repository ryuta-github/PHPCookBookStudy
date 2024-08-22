<?php

/**
 * 重みつき乱数を生成する
 */
$choices = ['Tony' => 10, 'Steve' => 2, 'Peter' => 1, 'wanda' => 4, 'Carol' => 6];

var_dump(arsort($choices));

function weighted_random_choice(array $choices): string
{
    arsort($choices);

    $total_weight = array_sum(array_values($choices));
    $selection = random_int(1, $total_weight);

    $count = 0;

    foreach ($choices as $choice => $weight) {
        $count += $weight;
        if ($count >= $selection) {
            return $choice;
        }
    }
}

print weighted_random_choice($choices);
