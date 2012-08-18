<?php
$a = 1;
$b = "foo bar";
$c = array("a","b","c");

var_dump($a); //整数
// int(1)

var_dump($b); //文字列は、文字列の長さとその中身が出力される
// string(7) "foo bar"

var_dump($c); //配列は要素数、キーが出力される

var_dump($a == $b); //演算の評価値
