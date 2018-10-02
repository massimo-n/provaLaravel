<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function groups(){
        return $this->belongsToMany('\App\Group');
    }
}
