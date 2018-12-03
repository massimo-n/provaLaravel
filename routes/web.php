<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
////    return view('welcome');
//    return view('layouts/app');
//});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('insertEvento','eventController@creazioneEvento');
Route::post('aggiungiEvento','eventController@insertEvento');
Route::get('listaEvento','eventController@listaEvento');
Route::get('modEvento/{id}','eventController@showEvento');
Route::post('modificaEvento','eventController@modificaEvento');
Route::get('deleteEvento/{id}','eventController@deleteEvento');

//commit
Route::get('insertNewCategory','categoryController@richiamaCategoriaPage');
Route::post('aggiungiCategoria','categoryController@inserisciCategoria');
Route::get('listaCategorie','categoryController@listaCategoria');
Route::get('modCategoria/{id}','categoryController@showCategoria');
Route::post('modificaCategoria','categoryController@modificaCategoria');
Route::get('deleteCcategoria/{id}','categoryController@deleteCategoria');


Route::get('insertNewServizio','serviceEvController@creaServizio');
Route::post('aggiungiServizio','serviceEvController@insertServizio');
Route::get('listaServizi','serviceEvController@listaServizi');
Route::get('modServizi/{id}','serviceEvController@visualizzaServizio');
Route::post('modificaServizi','serviceEvController@modificaServizi');
Route::get('deleteServizi/{id}','ServiceEvController@eliminaServizio');
Route::get('associaServizi','ServiceEvController@associaServizi');


Route::get('insertUtente','utenteController@inserisciDati');


Route::get('prova',function(){
    $eventi = \App\Event::all();
    return view('provafoto',['event'=>$eventi]);
});

Route::get('/upload', 'FileController@upForm')->name('upload.file');
Route::post('/upload', 'FileController@storeFile');

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', function (){
    Auth::logout();

    return redirect('/index');
});
