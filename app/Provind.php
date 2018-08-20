<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provind extends Model
{
    protected $table = 'provinds';

    public function district(){
        return $this->hasMany('App\District','provindID','id');
    }
    public function address(){
        return $this->belongsTo('App\Address','provindID','id');
    }
    public function addressP(){
        return $this->hasManyThrough('App\Address','App\Provind','addressID','provindID','id');
    }
}
