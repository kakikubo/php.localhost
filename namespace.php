<?php
// 複数のnamespaceを指定する
namespace Project\Module;
//// ここは Project\Module 名前空間の中
//
//class Directory{} // Project\Module\Directory クラス
//
//namespace Project\Module2;
//// ここは Project\Module2 名前空間の中
//class Directory{} // Project\Module2\Directory クラス

require_once 'Foo/Bar/Baz.php';
require_once 'Hoge/Huga.php';
require_once 'Module/Klass/Some.php';

use Foo\Bar as BBB;
use Hoge\Fuga;

class Piyo{}

$obj1 = new \Directory(); // 完全修飾なのでグローバルのDirectoryクラス

$obj2 = new BBB\Baz(); // エイリアスにもとづいてコンパイル時にFoo\Bar\Bazクラスとなる

$obj3 = new Fuga(); // インポートルールに基いてコンパイル時にHoge\Fugaクラスとなる

$obj4 = new Klass\Some(); // 修飾名で該当するインポートルールが無いため、コンパイル時に
					　　　// 現在の名前空間であるProject\Moduleが先頭に付けられ、
					      // Project\Module\Klass\Someクラスと解釈される

$obj5 = new Piyo(); // 非修飾名で該当するインポートルールがない為、コンパイル時の変換はない
					// 実行時に現在の名前空間が先頭に付与されたProject\Module\Piyoクラスと解釈される

some_func(); // 実行時に Project\Module\some_func()関数を探し、なければグローバル関数を実行

BBB\SOME_CONST ; // コンパイル時にFoo\Bar\SOME_CONST定数に変換される

SOME_CONST; // 実行時に Project\Module\SOME_CONST がなければグローバルのSOME_CONST定数が評価される
