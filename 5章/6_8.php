<?php

/**
 * DateTime , DateIntervalを用いた、日付の加算減産
 */

// DateTimeで生成された日付を加減算すると、元の日付自体が変更されることに注意
// 変更したく無い場合は、DateTimeImmutableを用いる

// $base_time = new DateTime();
$base_time = new DateTimeImmutable();
var_dump($base_time);

$interval = new DateInterval('P12D');
// $interval = new DateTimeImmutable('P12D');
var_dump($base_time->add($interval));

// $base_time = new DateTime();
var_dump($base_time->sub($interval));
