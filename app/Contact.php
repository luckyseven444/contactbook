<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function phones(){
        return $this->hasMany('App\Phone');
    }

    public function addresses(){
        return $this->hasMany('App\Address');
    }
}
