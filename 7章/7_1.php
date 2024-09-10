<?php

/**
 * 配列の操作
 */

// 配列の初期化
$array = range(0, 10);
var_dump($array);

// 特定のkey項目を削除
unset($array[5]);

var_dump($array);

// 削除した要素を詰める
$array = array_values($array);
var_dump($array);

// spliceで要素を削除
// unsetと違い、削除した要素が詰まる & 戻り値で削除対象が戻る
var_dump(array_splice($array, 0, 8));
var_dump($array);