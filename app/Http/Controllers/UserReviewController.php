<?php

namespace App\Http\Controllers;

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

        $userId = Auth::id();
        $user = Auth::user();
        $eventId = $request->input('eventId');
        $event = DB::table('events')->where('id',$eventId)->first();
        $event1 = new \App\Event($event);



//        $review = DB::table('userreview')
//            ->where('event_id',$eventId)
//            ->where('user_id',$userId)
//            ->update(['review',$request->input('review')]);


    }

}
