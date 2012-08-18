<?php
$array = array(1, 1.5, "2", true,);
$new_array = array_map('strval', $array);
var_dump($new_array);

$array = array(1, 1.5, "2", true,);
$new_array = array_map('intval', $array);
var_dump($new_array);

// 可変関数↓
// 引数に与えられた名前を持つ関数が存在すれば呼び出すための関数
function func_caller($name)
{
		if (function_exists($name)){
				$name(); //可変関数として関数の呼び出し
		}
}

function foo()
{
		echo 'foo called',PHP_EOL;
}
func_caller('foo'); // foo called
