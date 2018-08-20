<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'wards';
    public function address(){
        return $this->belongsTo('App\Address','wardID','id');
    }
}
