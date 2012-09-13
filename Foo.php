<?php
// cloneを用いた例(clone.phpとあわせてみてみて. p427)
class Foo
{
    public $bar;

    public function __clone()
    {
        $this->bar = clone $this->bar;
    }
}

class Bar
{
    public $value;
}


$foo = new Foo();
$foo->bar = new Bar();
$foo->bar->value = 'bar';

$foo2 = clone $foo;
$foo2->bar->value = 'baz';

var_dump($foo->bar->value); //bar
var_dump($foo2->bar->value); //baz

