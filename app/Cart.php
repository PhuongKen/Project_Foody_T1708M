<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Cart
{
    public static function getCart()
    {
        if (Session::has('cart')) {
            return Session::get('cart');
        }
        return new Cart();
    }

    function __construct()
    {
        $this->items = array();
    }

    public static function getTotalItem()
    {
        $count = 0;
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $count = self::calculateTotalItem($cart);
        }
        return $count;
    }
    public static function calculateTotalItem($cart)
    {
        $count = 0;
        foreach ($cart->items as $item) {
            $count += $item-> quantity;
        }
        return $count;
    }
    function getTotalMoney()
    {
        $total_money = 0;
        foreach ($this->items as $item) {
            $total_money += $item->food->discountPrice * $item->quantity;
        }
        return $total_money;
    }
    function getTotalMoneyWithFormat()
    {
        return sprintf('%s', number_format($this->getTotalMoney(), 0));
    }
    function getTotalMoneyString()
    {
        return sprintf('%s (vnd)', number_format($this->getTotalMoney(), 0));
    }

    //xóa 1
    public function reduceByOne($id){
        $this->items[$id]['qty']--;
        $this->items[$id]['price'] -= $this->items[$id]['item']['price'];
        $this->totalQty--;
        $this->totalPrice -= $this->items[$id]['item']['price'];
        if($this->items[$id]['qty']<=0){
            unset($this->items[$id]);
        }
    }
    //xóa nhiều
    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
