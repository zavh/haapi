<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    public function switches(){
        return $this->hasMany('App\Swt');
    }
}
