<?php
// 以下、４つのメソッドを実装する必要があります
// offsetGet()
// offsetSet()
// offsetExists()
// offsetUnset()
// FIXME これもあとでまた復習。ちょっとよくわかんない。ArrayAccess
// をimplements する事で $cart[] = ...... というアクセスが出来るようになる、というところまでわかりました。
//

class Cart implements ArrayAccess
{
    private $items = array();

    public function offsetGet($key)
    {
        if (isset($this->item[$key])){
            return $this->items[$key];
        }

        return null;
    }

    public function offsetSet($key, $value)
    {
        if (isset($key)){
            $this->items[$key] = $value;
        } else {
            $this->items[] = $value;
        }
    }

    public function offsetExists($key)
    {
        return isset($this->items[$key]);
    }

    public function offsetUnset($key)
    {
        unset($this->items[$key]);
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
$cart[] = new CartItem('パーフェクトPHP', 3200);
$cart[] = new CartItem('パーフェクトJava', 3600);
$cart[5] = new CartItem('Web+DB PRESS', 1480);

var_dump($cart);
