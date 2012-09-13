<?php

class Cart
{
    private $items = array();

    public function order()
    {
        if (count($this->items) === 0){
            throw new LogicException('This cart has no items');
        }
        // 注文処理
    }
}

$cart = new Cart();
$cart->order(); // まあ、絶対エラーになるのだけど


