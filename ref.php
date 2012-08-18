<?php
#function add_one(&$value) //参照渡ししている
#{
#		$value += 1;
#}
#$a = 10;
add_one($a);
echo $a, PHP_EOL;

// add_one(2); // 引数が参照渡しになっている場合は、必ず変数で渡す必要がある
// →Fatal error: Only variables can be passed by reference
//
//


function &add_one(&$value)
{
		return $value += 1;
}
$a = 10;
$b =& add_one($a);
$b += 1;

echo $a, PHP_EOL;
echo $b, PHP_EOL;
