<?php
error_reporting(E_ALL & ~E_STRICT);
echo 'テストプログラム開始', PHP_EOL;
class foo{
	public function __construct(){} // PHP5形式
	public function foo() {} // PHP4形式 E_STRICTによるエラーが出る筈だが出ないな。。。
}

echo 'テストプログラム終了', PHP_EOL;
