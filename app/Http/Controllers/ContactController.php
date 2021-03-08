<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index(){
    	return view("contact/index");
    }

    public function store(Request $request){
    	$request->validate(array(
    		"name"=>"required",
    		"contact_category"=>"required",
    		"email"=>"required|email",
    		"message"=>"required"
    	));
    	Contact::store(array(
    		"name"=>$request->name,
    		"email"=>$request->email,
    		"message"=>$request->message
    	));
    	// Mail::to($request->user())->send(new OrderShipped($order));
    	return redirect("contact/thank");
    }

    public function thank(){
    	return view("contact.thank");
    }
}
