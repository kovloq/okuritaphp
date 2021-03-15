<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    //
    public function policy(){
    	return view("help.policy");
    }

    public function corporate(){
    	return view("help.corporate");
    }

    public function terms(){
    	return view("help.terms");
    }

    public function fee(){
    	return view("help.fee");
    }

    public function shipping(){
    	return view("help.shipping");
    }

    public function payment(){
    	return view("help.payment");
    }

}
