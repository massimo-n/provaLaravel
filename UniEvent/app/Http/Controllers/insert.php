<?php

namespace App\Http\Controllers;

use App\Event;
use App\Service;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class insert extends Controller{

//    public function creazioneEvento(){
//        $services = \App\Service::all();
//        $events = \App\Event::all();
//        return view('creazioneEvento',['services'=>$services],['events'=>$events]);
//    }
//
//    public function insertEvento(Request $request){
//        $evento = new \App\Event();
//
//        $evento->id = $request->input('id');
//        $evento->title = $request->input('title');
//        $evento->image = $request->input('image');
//        $evento->description = $request->input('desc');
//        $evento->price= $request->input('price');
//        $evento->address= $request->input('ind');
//        $evento->service_id= $request->input('relazione');
//
//        $evento->save();
////        $evento->services()->save($evento);
//    }
//
//    public function creazioneServizio(){
//        return view('creazioneServizio');
//    }
//
//    public function insertServizio(Request $request){
//        $evento = new \App\Service();
//
//        $evento->name = $request->input('name');
//        $evento->description = $request->input('desc');
//
//
//        $evento->save();
//    }
}

