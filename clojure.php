<?php

$my_pow = function($times = 2)
{
		return function ($v) use (&$times)
		{
				return pow($v, $times); // v=2 times = 3なら、2の3乗
		};
};

$cube = $my_pow(3); // $timesに3を渡し、中の関数のuseを決定
echo $cube(1), PHP_EOL; //中の無名関数の第一引数を1にして実行 1の3乗
echo $cube(2), PHP_EOL;
echo $cube(3), PHP_EOL;
echo $cube(4), PHP_EOL;
