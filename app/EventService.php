<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventService extends Model
{
    public function services(){
        return $this->belongsToMany('\App\Event');
    }
}
