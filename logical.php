<?php
if (isset($argv[1]) && $argv[1]){ // 短絡評価の為、引数がなかった時点で条件を満たさないものとみなされる
	echo '与えられた引数は真です',PHP_EOL;
}else{
	echo '引数が与えられていないか、与えられた引数が真ではありません。',PHP_EOL;
}

$flag = false;
if ( !($flag and foo()) ) echo "hoge-",PHP_EOL;

