<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index(){
    	$user=User::find(Auth::id());
    	$country=Country::all();
    	return view("profile.index")->with(array("user"=>$user,"country"=>$country));
    }

    public function password(){

    }
}
