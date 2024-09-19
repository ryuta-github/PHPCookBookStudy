<?php

// 文字列を配列に変換
$data = "to be or not to be";
// var_dump(str_split($data,2));
var_dump(explode(' ', $data));

// 配列を文字列に結合する
$data2 = ["takeda", "ryutaro", "33"];
var_dump(implode(',', $data2));
var_dump(join($data2));

// 配列を逆順
var_dump(array_reverse($data2));
