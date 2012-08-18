<?php
function add($v1, $v2)
{
		return $v1 + $v2;
}

class Math
{
		public function sub($v1, $v2)
		{
				return $v1 - $v2;
		}

		public static function add($v1, $v2)
		{
				return $v1 + $v2;
		}
}
function hoge(){
	echo "hoge",PHP_EOL;
	}


// call_user_func()関数では、コールバック関数の指定につづいて引数を指定
call_user_func('add', 1, 2); // 3

// コールバック関数には無名関数も指定できる
call_user_func(function ($v1, $v2){return $v1 + $v2;}, 1, 2);

// static メソッドの場合、クラス名を文字列で指定できる
call_user_func(array('Math', 'add'), 1,2);

// staticメソッドの場合、クラス名::メソッド名という文字列でも指定できる
call_user_func('Math::add', 1,2);

// インスタンス変数とメソッド名を指定する場合
$math = new Math();
call_user_func(array($math, 'sub'), 1, 2);

// call_user_func_arrayでは第2引数に配列で引数のリストを指定
call_user_func_array('add', array(1,2));
call_user_func_array(array($math, 'sub'), array(1,2));
