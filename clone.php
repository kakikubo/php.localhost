<?php
/**
 * FIXME これ実行すると，cloneのところで落ちちゃう…
 * kair% php clone.php
 * PHP Fatal error:  __clone method called on non-object in /Users/kakikubo/Documents/php.localhost/clone.php on line 17
 *
 * Fatal error: __clone method called on non-object in /Users/kakikubo/Documents/php.localhost/clone.php on line 17
 * kair% 
 */
class SomeObject{};

$obj = new SomeObject();
$obj = "hoge";

$obj2 = $obj; // 参照渡しになる

$obj = "kakikubo";
if ($obj === $obj2){
    echo "おなじ";
}

$obj3 = clone $obj;
