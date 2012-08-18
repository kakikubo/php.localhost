<?php
// 配列の要素を二倍にする無名関数を作る
$array = array(1,2,3,4,5,);
var_dump(array_map(create_function('$v', 'return $v * 2;'), $array));

// ホントの無名関数でやるならこんな感じ
//
var_dump(function($v){ return $v * 2; }, $array);


