<?php
require './MyIterator.php';

// IteratorAggregateインターフェースを実装した例
// FIXME ここもよくわからんです。。。(p.431)
// MyIteratorクラスをnewしてるのは何故ですか
class Cart implements IteratorAggregate
{
    private $items;

    public function addItem($item)
    {
        $this->items[] = $item;
    }

    public function getIterator()
    {
        return new MyIterator($this->items);
    }
}

class CartItem { 
    public $title;
    public $price;

    public function __construct($title, $price)
    {
        $this->title = $title;
        $this->price = $price;
    }
};

$cart = new Cart();
$cart->addItem(new CartItem('パーフェクトPHP', 3200));
$cart->addItem(new CartItem('パーフェクトJava', 3600));
$cart->addItem(new CartItem('Web+DB PRESS', 1480));

foreach ($cart as $item){
    echo $item->title;
}



