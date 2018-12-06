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



Route::get('/','eventController@listaAllEventi');
Route::get('/index','eventController@listaAllEventi');
Route::get('/home', 'eventController@listaAllEventi');


Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('insertEvento','eventController@creazioneEvento');
Route::post('aggiungiEvento','eventController@insertEvento');
Route::get('listaEvento','eventController@listaEvento');
Route::get('dettagliEvento/{id}','eventController@dettagliEvento');
Route::get('modEvento/{id}','eventController@showEvento');
Route::post('modificaEvento','eventController@modificaEvento');
Route::get('deleteEvento/{id}','eventController@deleteEvento');

//commit
Route::get('insertNewCategory','categoryController@richiamaCategoriaPage');
Route::post('aggiungiCategoria','categoryController@inserisciCategoria');
Route::get('listaCategorie','categoryController@listaCategoria');
Route::get('modCategoria/{id}','categoryController@showCategoria');
Route::post('modificaCategoria','categoryController@modificaCategoria');
Route::get('deleteCategoria/{id}','categoryController@deleteCategoria');


Route::get('insertNewServizio','serviceEvController@creaServizio');
Route::post('aggiungiServizio','serviceEvController@insertServizio');
Route::get('listaServizi','serviceEvController@listaServizi');
Route::get('modServizi/{id}','serviceEvController@visualizzaServizio');
Route::post('modificaServizi','serviceEvController@modificaServizi');
Route::get('deleteServizi/{id}','ServiceEvController@eliminaServizio');
Route::get('associaServizi','ServiceEvController@associaServizi');

Route::get('userDetails','UserController@datiUtente');
Route::post('modificaUtente','UserController@modificaDati');
Route::get('deleteUser','UserController@eliminaProfilo');

Route::get('recensione/{id}','UserReviewController@recensione');
Route::post('aggiungiRecensione','UserReviewController@aggiungiRecensione');





Route::get('prova',function(){
    $eventi = \App\Event::all();
    return view('provafoto',['event'=>$eventi]);
});

Route::get('/upload', 'FileController@upForm')->name('upload.file');
Route::post('/upload', 'FileController@storeFile');

Route::auth();


Route::get('/logout', 'HomeController@logout');

//Route::get('/logout', function (){
//    Auth::logout();
//
//    return redirect('/index');
//});
