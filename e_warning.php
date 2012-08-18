<?php
echo 'テストプログラム開始',PHP_EOL;
$arr = array(1,2,3,4,);
$ret1 = array_reverse();
$ret2 = array_reverse(1);
$ret3 = array_reverse($arr);
var_dump($ret1); // nullが入る
var_dump($ret2); // nullが入る
var_dump($ret3);
echo 'テストプログラム終了',PHP_EOL;
