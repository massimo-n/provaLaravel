<?php

namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class ins extends Controller{
    public function insertform(){
        return view('create');
    }

    public function insert(Request $request){
        $name = $request->input('stud_name');
        DB::insert('insert into studente (name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
