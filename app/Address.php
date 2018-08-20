<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';
    public function provind(){
        return $this->hasOne('App\Provind','provindID','id');
    }
    public function district(){
        return $this->hasOne('App\District','districtID','id');
    }
    public function ward(){
        return $this->hasOne('App\Ward','wardID','id');
    }
    public function restaurant(){
        return $this->belongsTo('App\Restaurant','addressID','id');
    }
}
