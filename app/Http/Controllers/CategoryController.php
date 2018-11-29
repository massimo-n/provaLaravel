<?php

namespace App\Http\Controllers;

use App\Event;
use App\Service;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class categoryController extends Controller{

    public function richiamaCategoriaPage(){
        if(Auth::check()){
            return view('\category\categoriaPage');
        }
        else{
            return 'danni';
        }
    }

    public function inserisciCategoria(Request $request){
        if (Auth::check()) {

            $categoria = new \App\EventCategory();

            $categoria->descrizioneCategoriaEvento = $request->input('desc');

            $categoria->save();

            return view('welcome');
        }
    }

    public function listaCategoria(){
        $categories = DB::table('event_categories')->get();

        if(($categories->count())>0){
            return view('category.listaCategorie',['categories'=>$categories]);
        }
        else
            return 'danni';
    }

    public function showCategoria($id){
        if(Auth::check()){
//            $userId = Auth::user()->getAuthIdentifier();
            $categories = DB::table('event_categories')
                ->where('id',$id)
//                ->where('user_id',$userId)
                ->get();
            if(($categories->count())>0) {
                return view('category.showCategoria', ['categories' => $categories]);
            }
            else{
                return 'caccos nnè ita bbone';
            }
        }
        else{
            return view('\errors\notLogged');
        }
    }

    public function modificaCategoria(Request $request){

        //controllo se l'utente è loggato,
        //cosi per prudenza

        if (Auth::check()) {

//            $utente = Auth::user()->getAuthIdentifier();
            $id = $request->input('custId');
                $category = DB::table('event_categories')
                    ->where('id', $id)
//                    ->where('user_id', $utente)
                    ->update(['descrizioneCategoriaEvento' => $request->input('desc')]);

                return $this->listaCategoria();

        } else
            abort(401,'loggati merdaccia');
    }

    public function deleteCategoria($id){
        if (Auth::check()) {
//            $utente = Auth::user()->getAuthIdentifier();
            $category = DB::table('event_categories')
                ->where('id', $id);
//                ->where('user_id', $utente);
            $category->delete();
            return $this->listaCategoria();
        } else
            abort(401,'loggati merdaccia');
    }

}

