<?php
//返り値を返さない関数の定義
function no_return_func(){}

$null_value = no_return_func(); //nullが代入される
var_dump($null_value);

$var = 1;
var_dump(isset($var)); // true。変数$varは定義されている
$var = null;
var_dump(isset($var)); // false。変数$varはnullの為、セットされていないとされる。
var_dump($var);        // null。変数$varはnull
unset($var);
var_dump(isset($var)); // false。変数$varはunsetされている
var_dump($var);        // unsetされたためNotice(Undefined variable)が発生。値としてはnull。

