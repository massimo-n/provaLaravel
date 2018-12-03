<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth')->except('index','logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $categories = DB::table('event_categories')->get();
        return view('index');
//        return view('index',['categories'=>$categories]);
    }

    public function logout(){
        Auth::logout();

        return $this->index();
    }


//Route::get('/', function () {
////    return view('welcome');
//    $categories = DB::table('event_categories')->get();
//    return view('index',['categoories',$categories]);
//});
//
//Route::get('/index', function () {
//    return view('index');
//});
//
//Route::get('/home', 'HomeController@index')->name('home');
//
//Route::get('/logout', function (){
//    Auth::logout();
//
//    return redirect('/index');
//});



}
