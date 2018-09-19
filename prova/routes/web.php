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

//questo file è per il reindirizzamento delle pagine via url

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ciao', function () {
    return view('giangiorgio');
});


//reindirizzamento di pagine con parametri obbligatori
Route::get('/ID/{id}', function ($id) {
    echo 'ID: ' . $id;
});

//con parametri opzionali
//se passo un parametro stampa quello senno è di default quello in $name
Route::get('user/{name?}', function ($name = 'TutorialsPoint') {
    return $name;
});

Route::get('insert','ins@insertform');
Route::post('create','ins@insert');

Route::get('view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@ColtelloniSulTu');