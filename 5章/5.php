<?php

/**
 * 数値を検証する
 */

$datas = [123, 'あいうえお', '999'];

foreach ($datas as $data) {
    if (is_numeric($data)) {
        echo ($data);
    } else {
        echo '違うよ';
    }
}
