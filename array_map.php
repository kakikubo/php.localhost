<?php
$array = array(1,2,3,4,5);

// 配列のすべての値を二乗する
$sq_array = array_map(function($v){
    return $v * $v;
}, $array);

var_dump($sq_array); // 二乗された値が格納されている

// 2つの配列を足す例
$array1 = array(1,2,3,4,5);
$array2 = array(1,2,3);

$added = array_map(function($v1, $v2){
    $v1 = is_null($v1) ? 0 : $v1;
    $v2 = is_null($v2) ? 0 : $v2;

    return $v1 + $v2;
}, $array1, $array2);

var_dump($added);
