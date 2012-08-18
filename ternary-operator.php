<?php
$param = isset($argv[1]) ? $argv[1] : 'default';
var_dump($param);

// 三項演算子の省略型
function some_func(){
  // なんらかのDB接続の結果など
  return true;
}

$result = some_func() ? some_func() : 'default' ; //二度よびだしてしまっている
$result = some_func() ?: 'default' ; //これならsome_func()の結果だけ使える

var_dump($result);

