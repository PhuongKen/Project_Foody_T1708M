<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    public function food()
    {
        return $this->belongsTo('App\Food', 'foodID');
    }
}
