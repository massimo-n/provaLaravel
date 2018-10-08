<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

    use Notifiable;

    protected $fillable = ['nome','cognome','indirizzo','email','password'];
    protected $hidden = ['password','remember_token'];

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
