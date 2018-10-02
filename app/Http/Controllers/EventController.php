<?php

namespace App\Http\Controllers;

use App\Event;
use App\Service;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class eventController extends Controller
{

    public function creazioneEvento()
    {
        $services = \App\Service::all();
        $events = \App\Event::all();
        return view('createEvento', ['services' => $services], ['events' => $events]);
    }

    public function vediEvento(){
        $event = \App\Event::all();

        return view('provafoto',['events'=>$event]);
    }

    public function insertEvento(Request $request)
    {
        $evento = new  \App\Event();
        $utente = new \App\User(['nome' => 'alessio', 'cognome' => 'gionnio', 'indirizzo' => 'si', 'email' => 'shfdgh', 'password' => 'pw']);
        $utente->save();

        //$evento->id = $request->input('id');
//        $evento->user_id = $request->input('user_id');
        $evento->titolo = $request->input('title');
        $evento->immagine = $request->file('igiancarlo')->store('immagine');
        $evento->descrizione = $request->input('desc');
        $evento->prezzo = $request->input('price');
        $evento->indirizzo = $request->input('ind');
        $evento->dataEvento = $request->input('data');
        $evento->dataCreazione = $request->input('creazione');

        $utente->save();
        $utente->creates()->save($evento);

        //$evento->save();

    }

    public function creazioneServizio()
    {
        return view('creazioneServizio');
    }

    public function insertServizio(Request $request)
    {
        $evento = new \App\Service();

        $evento->name = $request->input('name');
        $evento->description = $request->input('desc');


        $evento->save();
    }
}

