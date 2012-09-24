<?php

$array = array(
    1,
    2,
    3,
    'foo1' => 'bar1',
    'foo2' => 'bar2',
    'foo3' => 'bar3',
);

// オフセット1から長さ4の配列を作る
var_dump(array_slice($array, 1, 4));

// キーの保持をする
var_dump(array_slice($array, 1, 4, true));

// 負の値のオフセット(末尾から計算)
var_dump(array_slice($array, -2, 2));
