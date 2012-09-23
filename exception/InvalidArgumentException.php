<?php

// InvalidArgumentException (LogicExceptionをextendsしたクラスです)

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

    public function add(Item $item, $quantity)
    {
        if (!$item->isAvailableForSale()){
            throw new InvalidArgumentException('Item is not available for sale');
        }
        // 商品の追加処理
    }
}

class Item{
    private $avail;
    public function __construct($avail = false)
    {
        $this->avail = $avail;
    }

    public function isAvailableForSale()
    {
        return $this->avail;
    }
};

$order = new Cart();
$order->add(new Item(),"test");

