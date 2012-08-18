<?php
class SomeClass
{}

$a = new SomeClass();

if ($a instanceof SomeClass) {
    echo '$a は SomeClassのインスタンスです', PHP_EOL;
}


//インターフェースも調べる
interface FooInterface{}

class ParentFoo{}

class Foo extends ParentFoo implements FooInterface{}

$a = new Foo();
var_dump($a instanceof Foo);
var_dump($a instanceof ParentFoo);
var_dump($a instanceof FooInterface);
var_dump($a instanceof Bar);

