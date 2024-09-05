<?php

/**
 * タイムゾーンを設定する
 */

$now = new DateTIme();
$now->setTimezone(new DateTimeZone('America/Los_Angeles'));
var_dump($now);

$now->setTimezone(new DateTimeZone('ASIA/Tokyo'));
var_dump($now);
