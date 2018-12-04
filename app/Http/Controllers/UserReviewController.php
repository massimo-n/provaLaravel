<?php

namespace App\Http\Controllers;

use App\Event;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class UserReviewController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function recensione($id){
        return view('review.recensionePage',['id'=>$id]);
    }

    public function aggiungiRecensione(Request $request){

        $eventId = $request->input('eventId');

        $event = Event::find($eventId);

        $utente = Auth::user();
        $utenteId = Auth::id();

        $utente->review()->save($event);

        $review = DB::table('userreview')
            ->where('event_id',$eventId)
            ->where('user_id',$utenteId)
            ->update(['review'=>$request->input('review')]);

        return 'true';
    }

}
