<?php
$fruits = array(
	'apple',
	'banana',
	'orange',
	);

echo $fruits[0], PHP_EOL; //apple
echo $fruits[3], PHP_EOL; //Notice: Undefined offset

// 上の例と同じ事
$fruits2[] = 'apple';
$fruits2[] = 'banana';
$fruits2[] = 'orange';
echo $fruits2[0], PHP_EOL; //apple

// 初めて使われる変数にしか[]は利用できない
$fruits3 = 1;
$fruits3[] = 'apple';


// 連想配列
$fruits_color = array(
	'apple' => 'red',
	'banana' => 'yellow',
	'orange' => 'orange',
	);

echo $fruits_color['banana'], PHP_EOL;

// キーを持つ要素と持たない要素を混ぜて定義
$fruits_mixed = array(
	'peach',
	'blueberry',
	'apple' => 'red',
	'banana' => 'yellow',
	'orange' => 'orange',
	);
echo $fruits_mixed[1],PHP_EOL;
echo $fruits_mixed['banana'],PHP_EOL;
// キー定義が被ったら、後の方が優先される
$array = array(
    4,
	5,
	1 => 'これは1',
	'string_key' => '最初の定義',
	'string_key' => '次の定義',
	);
var_dump($array);

// キーには論理型、浮動小数点型、nullも扱える。ただし、それぞれ取り出し方は注意
$var_array = array(
	true => 'true です',
	3.5  => 'さんてんご',
	null => 'ぬるっと',
	);

var_dump($var_array);
echo $var_array[1],PHP_EOL;
echo $var_array[3],PHP_EOL;
echo $var_array[""],PHP_EOL;

// 多次元配列
$fruits = array(
    'apple' => array(
		'price' => 100,
		'count' => 2,
		),
	'banana' => array(
		'price' => 80,
		'count' => 5,
		),
	'orange' => array(
	    'price' => 90,
		'count' => 3,
		),
);
foreach ($fruits as $name => $value){
	echo "$name  は１つ {$value['price']} 円で、{$value['count']} 個です",PHP_EOL;
	}
// 配列の演算
$a = array('a' => 1, 'b' => 3, 'c' => 5);
$b = array('a' => 1, 'c' => 5, 'b' => 3);
$c = array('a' => 1, 'b' => 2);

var_dump($a == $b);
var_dump($a === $b);
var_dump($a + $c);
var_dump($c + $a);

// array にキーがあるかどうかを調べる(nullの場合の扱いがarray_key_existsとissetで違うのに注意)
$array = array('hoge' => null, 'fuga' => 2);
var_dump(array_key_exists('hoge', $array));
var_dump(isset($array['hoge']));
