<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudDeleteController extends Controller{
    public function index(){
        $users = DB::select('select * from studente');
        return view("stud_delete_view",['users'=>$users]);

    }

    public function ColtelloniSulTu($id){
        DB::delete('delete from studente where id = ? ',[$id]);
        echo "ho tirato gli sgabelloni sul tu.<br>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
    }

}
