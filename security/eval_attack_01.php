<?php
/**
 * このプログラムは脆弱性のサンプルです。
 * 公開サーバに設置しないで下さい
 */
$string = 'こたんたにたちたわた、世界！';
eval("echo htmlspecialchars(str_replace('" . $_GET['keyword'] . "', '', '" . $string . "'), ENT_QUOTES, 'UTF-8');");
// echo htmlspecialchars(str_replace('た', '', 'こたんたにたちたわた、世界！'), ENT_QUOTES, 'UTF-8');
