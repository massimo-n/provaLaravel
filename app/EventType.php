<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends \Eloquent
{
    public function type(){
        return $this->belongsToMany('\App\Event', 'types');
    }
}
