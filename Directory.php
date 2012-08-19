<?php
namespace Project\Module;
// use \Directory as Directoryと等価。グローバルなクラスに「\」なしでアクセスできるようになる
use \Directory;

$dir = new Directory('./');

// 別の名前空間に定義されたクラスBazクラスを、Bazという名前でアクセスできるようにする
use Foo\Bar\Baz;
$baz =  new Baz();


