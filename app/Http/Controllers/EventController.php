<?php

namespace App\Http\Controllers;

use App\Event;
use App\Service;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class eventController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function creazioneEvento(){

        //controllo se l'utente è loggato,
        //cosi per prudenza
        if(Auth::check()){
            $services = DB::table('event_services')->get();
            return view('\event\createEvento',['services'=>$services]);
        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function insertEvento(Request $request){

        //controllo se l'utente è loggato,
        //cosi per prudenza

        if (Auth::check()) {

            //creo oun oggetto evento
            $evento = new  \App\Event();

            //riprendo l'utente dalla autenticazione
            $user = Auth::user();

            //sempre dalla auth prendo l'id dell'utente
            $utente = auth()->user()->getAuthIdentifier();

            //riempio i campi dell'evento nel db
            $evento->user_id = $utente;
            $evento->titolo = $request->input('title');
            if($request->hasFile('igiancarlo')){
                $name = $request->file('igiancarlo')->getClientOriginalName();
                $request->file('igiancarlo')->storeAs('public\upload', $name);
                $evento->immagine = $name;
            }
            else{
                $evento->immagine = 'null';
            }
            $evento->descrizione = $request->input('desc');
            $evento->prezzo = $request->input('price');
            $evento->indirizzo = $request->input('ind');
            $evento->dataEvento = $request->input('data');
            $evento->dataCreazione = $request->input('creazione');

            //collego l'utente che ha creato l'evento con l'evento stesso
            $user->creates()->save($evento);
            $id = $evento->id;

            return $this->redirectEventService($id);

        } else
            abort(401,'loggati merdaccia');
    }

    public function redirectEventService($id){
        $services = DB::table('event_services')->get();
        $associatedServices = collect();
        $events = DB::table('events')->where('id',$id)->get();
        $idEvento = $id;
        return view('\event\bindEventoServizio',['services'=>$services,'events'=>$events, 'idEvento'=>$idEvento,'associatedServices'=>$associatedServices]);
    }

    public function listaEvento(){
        //controllo se l'utente è loggato,
        //cosi per prudenza
        if(Auth::check()){
            $user = Auth::user()->getAuthIdentifier();
            $events = DB::table('events')->where('user_id',$user)->get();
            return view('\event\modifyEvento',['events'=>$events]);
        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function showEvento($id){
        if(Auth::check()){
            $userId = Auth::user()->getAuthIdentifier();
            $events = DB::table('events')->where('id',$id)->where('user_id',$userId)->get();
            if(($events->count())>0) {
                return view('\event\showEvento', ['events' => $events]);
            }
            else{
                return 'caccos nnè ita bbone';
            }
        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function modificaEvento(Request $request){

        //controllo se l'utente è loggato,
        //cosi per prudenza

        if (Auth::check()) {

            $utente = Auth::user()->getAuthIdentifier();
            $id = $request->input('custId');
            if($request->hasFile('photo')) {
                $evento = DB::table('events')
                    ->where('id', $id)
                    ->where('user_id', $utente)
                    ->update(['titolo' => $request->input('title'),
                        'immagine' => $request->file('photo')->store('/public/upload'),
                        'descrizione' => $request->input('desc'),
                        'prezzo' => $request->input('price'),
                        'indirizzo' => $request->input('ind'),
                        'dataEvento' => $request->input('data'),
                        'dataCreazione' => $request->input('creazione')]);

                return $this->listaEvento();
            }
            else{
                $evento = DB::table('events')
                ->where('id', $id)
                ->where('user_id', $utente)
                ->update(['titolo' => $request->input('title'),
//                    'immagine' => $request->file('photo')->store('/public/upload'),
                    'descrizione' => $request->input('desc'),
                    'prezzo' => $request->input('price'),
                    'indirizzo' => $request->input('ind'),
                    'dataEvento' => $request->input('data'),
                    'dataCreazione' => $request->input('creazione')]);

                return $this->listaEvento();

            }

        } else
            abort(401,'loggati merdaccia');
    }

    public function deleteEvento($id){
        if (Auth::check()) {
            $utente = Auth::user()->getAuthIdentifier();
            $evento = DB::table('events')
                ->where('id',$id)
                ->where('user_id',$utente);
            $evento->delete();
            return $this->listaEvento();
        } else
            abort(401,'loggati merdaccia');
    }
}

