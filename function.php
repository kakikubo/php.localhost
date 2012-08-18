<?php

function mymodule_abs ($num)
{
		if ($num < 0){
			return - $num;
		}
		return $num;
}

function hello ($name, $greeting = 'Hello! ')
{
		echo $greeting, $name, PHP_EOL;
}

hello('Bob', 'Good morning ');
hello('Tom');

// タイプヒンティング
function array_output (array $var) //配列である事が期待される
{
		if (is_array($var)) foreach ($var as $v){
				echo $v, PHP_EOL;
		}
}

$array = array("a","b","c",);
array_output($array); //配列が渡されている場合は問題ないが、
//array_output(1);      //配列以外が渡された場合派 Catchable fatal error になる


$first_value = array_shift($array);
echo "さいしょの値は" , $first_value, PHP_EOL;
