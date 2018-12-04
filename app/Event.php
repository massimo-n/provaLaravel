<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends \Eloquent {

    protected $fillable = ['0'];

    public function partecipates(){
        return $this->belongsToMany('\App\User');
    }

    public function categories(){
        return $this->belongsToMany('\App\EventCategory');
    }

    public function services(){
        return $this->belongsToMany('\App\EventService');
    }

    public function favourites(){
        return $this->belongsToMany('\App\User');
    }

    public function create(){
        return $this->belongsTo('\App\User');
    }

    public function review(){
        return $this->belongsToMany('\App\User','userReview')->withPivot('review');
    }


}
