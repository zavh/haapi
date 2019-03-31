<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pi extends Model
{
    public function devices(){
        return $this->hasMany('App\Device');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
