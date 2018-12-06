<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends \Eloquent
{
    public function groups(){
        return $this->belongsToMany('\App\Group');
    }
}
