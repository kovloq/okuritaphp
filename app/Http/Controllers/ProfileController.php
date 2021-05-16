<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    //
    public function index(){
    	$user=User::find(Auth::id());
    	$country=Country::all();
    	return view("profile.index")->with(array("user"=>$user,"country"=>$country));
    }

    public function update(Request $request, $id){
    	$request->validate(array(
            "name"=>"required|string|max:255",
            'country_id' => 'required|integer',
            'year' => 'required',
            'month' => 'required',
            'date' => 'required',
            'gender' => 'required'
        ));
    	
    	User::find(Auth::id())->update(array(
    		"birthdate"=>$request->year."-".$request->month."-".$request->date,
    		"name"=>$request->name,
    		"is_newsletter"=>$request->is_newsletter,
    		"gender"=>$request->gender,
    		"country_id"=>$request->country_id
    	));
       
    	return redirect('mypage/profile')->with('success', 'Profile updated!');
    }

    public function password(){
        $user=User::find(Auth::id());
        return view("profile.password")->with(array("user"=>$user));
    }

    public function email(){
        $user=User::find(Auth::id());
        return view("profile.email")->with(array("user"=>$user));
    }

    public function post_email(Request $request, $id){
        User::find(Auth::id())->update(array(
            "email"=>$request->email
        ));
    }
}
