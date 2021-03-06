<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventCategory extends Model
{

    public function categories(){
        return $this->belongsToMany('\App\Event');
    }

    public function users(){
        return $this->belongsToMany('\App\User');
    }
}
