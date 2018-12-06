<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventService extends \Eloquent
{
    public function services(){
        return $this->belongsToMany('\App\Event', 'event_eventservice');
    }
}
