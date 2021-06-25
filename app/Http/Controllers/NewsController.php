<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    //
    public function index(){
        $news=News::orderBy("id","DESC")->paginate(15);
        return view("news.index")->with(array("news"=>$news));
    }

    public function detail($id){
        $news=News::find($id);
        return view("news/show")->with(array("news"=>$news));
    }
}
