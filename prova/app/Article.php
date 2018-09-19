<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Article extends Model{

    public function submit(Request $request){
        $article=new Article;
        $article->name = $request->name;
        $article->content=$request->content;
        $article->save();
    }

}
