<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AuthController extends Controller
{
    //
    // Show admin login form
    public function showLoginForm(){
    	return view("admin.login");
    }

    //Validate the inpput
    private function validator(Request $request)
	{
	    //validation rules.
	    $rules = [
	        'email'    => 'required|email|exists:admins|min:5|max:191',
	        'password' => 'required|string|min:4|max:255',
	    ];

	    //custom validation error messages.
	    $messages = [
	        'email.exists' => 'These credentials do not match our records.',
	    ];

	    //validate the request.
	    $request->validate($rules,$messages);
	}

	//; IF login failed redirect back to the screen
	private function loginFailed(){
    	return redirect()
        ->back()
        ->withInput()
        ->with('error','Login failed, please try again!');
	}

	//  POST login
	public function login(Request $request)
	{	
		//call vlaidate input function 
	    $this->validator($request);
	    // Check for email and password
	    if(Auth::guard('admin')->attempt($request->only('email','password'),$request->filled('remember'))){
	        //Authentication passed...
	        return redirect()
	            ->intended(route('admin'))
	            ->with('status','You are Logged in as Admin!');
	    }

	    //Authentication failed...
	    return $this->loginFailed();
	}

	public function logout()
	{
		// Logout admmin and clear all the session
	    Auth::guard('admin')->logout();
	    // Redirect back to admin
	    return redirect()
	        ->route('admin_login')
	        ->with('status','Admin has been logged out!');
	}
}
