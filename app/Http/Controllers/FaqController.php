<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;

class FaqController extends Controller
{
    //
    public function __invoke()
    {
        $faq=Faq::orderBy("sorts","ASC")->get();
        return view("faq.index")->with(array("faq"=>$faq));
    }
}
