<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';
    public function addressProvind(){
        return $this->hasManyThrough('App\Provind','App\Address','provindID','addressID','id');
    }
}
