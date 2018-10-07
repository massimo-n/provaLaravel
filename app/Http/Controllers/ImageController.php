<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function upForm(){
        return view('upload');
    }

    public function storeFile(request $request){
        if ($request->hasFile('fileUp')){
            $filename = $request->fileUp->getClientOriginalName();
            $size = $request->fileUp->getClientSize();
            $request->fileUp->storeAs('public/upload', $filename);
            $image = new Image();
            $image->name = $filename;
            $image->size = $size;
            $image->save();

            return 'yes';
        }
        return $request->all();
    }
}
