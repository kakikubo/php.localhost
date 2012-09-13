<?php
/**
 * ArrayAccessをimplementsしているので、offsetGet,offsetSet,offsetExists,offsetUnsetを実装する必要がある
 * Countableで必要なのはcountメソッドだけ
 */
class Cart implements ArrayAccess, Countable
{
    private $items;

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
    public function count()
    {
        return count($this->items);
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
$cart[] = new CartItem('WEB+DB PRESS', 1480);

var_dump(count($cart)); // 3
