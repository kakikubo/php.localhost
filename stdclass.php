<?php
$obj = new stdClass(); // 空のクラスを初期化
$obj->some_member = 1; // プロパティに値を代入する(プロパティの値の初期化)
var_dump($obj);

$var = 1;
$var_obj = (object)$var; //オブジェクトにキャスト
echo $var_obj->scalar, PHP_EOL; // 1

$array = array(
		'foo' => 2,
		'bar' => 3,
);

$array_obj = (object)$array;
echo $array_obj->bar, PHP_EOL;
