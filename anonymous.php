<?php
// 無名関数はPHP5.3からの機能です
//

$v1 = 1;
$v2 = 2;
$add = function($v1, $v2)
{
		return $v1 + $v2;
};
// var_dump($add); // Closure???になる？？
// echo $add, PHP_EOL;

$array = array(
		'"ダブルクォート"',
		'<tag>',
		'\'シングルクォート\'',
		);

$escaped = array_map(function($value){
		return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $array);

var_dump($escaped);
var_dump(htmlspecialchars('<hogehoge>', ENT_QUOTES, 'UTF-8'));
