<?php

// 遅延静的束縛(Late Static Bindings)
class Foo{
		public function helloGateway()
		{
				// self::hello();
				static::hello(); // 遅延静的束縛を使う
		}

		public static function hello()
		{
				echo __CLASS__, ' hello!', PHP_EOL;
		}
}

class Bar extends Foo {
		public static function hello()
		{
				echo __CLASS__, ' hello!!', PHP_EOL;
		}
}
$bar = new Bar();
// $bar->helloGateway(); // self::hello()なら→Foo hello!
$bar->helloGateway(); // static::hello()なら→Bar hello!
