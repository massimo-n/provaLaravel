<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Event;
use App\Service;
use App\Http\Controllers\Controller;
use App\EventService;
use PhpParser\Node\Expr\Cast\Object_;

class serviceEvController extends Controller{

    function __construct(){
        $this->middleware('auth');
    }

    public function creaServizio(){
        //controllo se l'utente è loggato,
        //cosi per prudenza
        if(Auth::check()){
            return view('\serviceEvent\createServizio');
        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function insertServizio(Request $request){

        if (Auth::check()){

            $eventService = new \App\EventService();

            $eventService->servizio_evento = $request->input('servizio');

            $eventService->save();

            return view('welcome');
        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function listaServizi(){

        if(Auth::check()){

            $services = DB::table('event_services')->get();

            return view('\serviceEvent\listServizio',['services'=>$services]);

        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function visualizzaServizio($id){
        if(Auth::check()){
            $services = DB::table('event_services')->where('id',$id)->get();

            if(($services->count())>0){
                return view('\serviceEvent\showService', ['services' => $services]);
//                return $services;
            }
        }

    }

    public function modificaServizi(Request $request){
        if (Auth::check()) {

            $id = $request->input('serId');

            $service = DB::table('event_services')->where('id',$id)
                ->update(['servizio_evento' => $request->input('servizio')]);


            return $this->listaServizi();

        }
        else{
            return view('\errors\notLogged');

        }

    }

    public function eliminaServizio($id){
        if (Auth::check()) {
            $service = DB::table('event_services')
                ->where('id',$id);
            $service->delete();
            return $this->listaServizi();
        } else{
            abort(401,'loggati merdaccia');
        }

    }

    public function associaServizi(Request $request){
        $idEvento = $request->input('idEvento');
        $idServizio = $request->input('$idServizio');
        $evento = DB::table('events')->where('id',$idEvento)->first();

        $evento1=new \App\Event($evento);
        $evento1->services()->attach($idServizio);

        $servizio = DB::table('event_services')->where('id',$idServizio)->first();

        return view('');
    }

}
