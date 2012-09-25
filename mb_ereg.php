<?php
mb_regex_encoding('UTF-8');
$test = 'パーフェクトPHP';
$pattern = 'パーフェクト';
$result = mb_ereg($pattern, $test);
var_dump($result);
echo mb_regex_encoding(), PHP_EOL;
