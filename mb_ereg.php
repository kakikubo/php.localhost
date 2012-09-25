<?php
mb_regex_encoding('UTF-8');
$test = 'パーフェクトPHP';
$pattern = 'パーフェクト';
$result = mb_ereg($pattern, $test);
var_dump($result);
echo mb_regex_encoding(), PHP_EOL; // この関数で返ってくる、もしくは設定される文字コードか、内部エンコーディングが使用される。
