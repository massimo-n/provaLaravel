<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function datiUtente(){
        if(Auth::check()){
            $users = Auth::user();
            return view('user.userData',['users'=>$users]);
        }
        else{
            return "danni";
        }
    }

    public function modificaDati(Request $request){
        if(Auth::check()){
            $userId = Auth::id();

            $user = DB::table('users')
                ->where('id',$userId)
                ->update(['nome' => $request->input('nome'),
                          'cognome' => $request->input('cognome'),
                          'email' => $request->input('email'),
                          'paese' => $request->input('paese'),
                          'provincia' => $request->input('provincia'),
                          'citta' => $request->input('citta'),
                          'indirizzo' => $request->input('ind'),
                          'indirizzo1' => $request->input('ind1'),
                          'cap' => $request->input('cap')]);

            return redirect()->to('/userDetails');
        }
        else
            return 'danno';

    }

    public function eliminaProfilo(){
        if(Auth::check()){

            $user = Auth::user();
            Auth::logout();
            try {
                if ($user->delete()){
                    $eventi = Event::all();
                    return view('/index',['eventi'=>$eventi])->withErrors(['Utente eliminato :)']);
                }
                else
                    return redirect()->to('/userDetails')->withErrors(['Ci sono stati problemi']);
            }
            catch (\Exception $e) {
                return $e;
            }
        }
    }

}
