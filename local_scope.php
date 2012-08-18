<?php
$foo = 1;

function some_function(){
	// $foo = 10;
	global $foo;
	echo $foo, PHP_EOL;
	$bar = 20;
}

some_function();
$foo = 2;
some_function();


#echo $foo, PHP_EOL; // 1
#echo $bar, PHP_EOL; // Notice: Undefined variable: bar

