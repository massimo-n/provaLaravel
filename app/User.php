<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = ['nome','cognome','indirizzo','email','password'];

    public function groups(){
        return $this->belongsToMany('\App\Group');
    }

    public function categories(){
        return $this->belongsToMany('\App\EventCategory');
    }

    public function partecipates(){
        return $this->belongsToMany('\App\Event');
    }

    public function creates(){
        return $this->HasMany('\App\Event');
    }

    public function favourites(){
        return $this->belongsToMany('\App\Event');
    }

    public function review(){
        return $this->belongsToMany('\App\Event');
    }
}
