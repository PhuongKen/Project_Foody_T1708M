<?php
/**
 * Created by PhpStorm.
 * User: Phuong
 * Date: 8/25/2018
 * Time: 4:34 PM
 */

namespace App;


class CartItem
{
    public function getTotalPriceWithFormat(){
        return sprintf('%s', number_format($this->food->discountPrice * $this->quantity, 0));
    }
}