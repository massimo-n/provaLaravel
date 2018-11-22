<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Service;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function creaUtente(){

        //controllo se l'utente è loggato,
        //cosi per prudenza
        if(Auth::check()){
            $users = DB::table('users')->get();
            return view('\user\createUtente',['users'=>$users]);
        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function salvaUtente(Request $request){

        //controllo se l'utente è loggato,
        //cosi per prudenza
        if(Auth::check()){
            $user = new \App\User();

        }
        else{
            return view('\errors\notLogged');
        }
    }
}
