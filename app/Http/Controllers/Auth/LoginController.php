<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
    *   This function is called when the sign in / sign up (login) button is pressed.
    *   It redirects to the log in page.
    * 
    **/
    public function create()
    {
        return view('auth.login');
    }

    /**
    *   This function is called when the login button in the login page is pressed.
    *   It authenticates , logges in and redirects to home
    * 
    **/
    public function store()
    {
        
        if (User::where('id', '=', request('id'))->exists()) {
            $messages = array("Sign up request awaiting admin approval.");
            if(User::find(request('id'))->confirmed == 0)
            {
                //$messages[] = "Sign up request waiting for admin approval.";
                $title = "Problem with the request.";
                return view('message')->with(['title'=>$title,'messages'=>$messages]);
            }    
        }  

        if (auth()->attempt(request(['id' , 'password']))) {
            // Authentication passed...
            return redirect("/");
            
        }

        else return back();

    }


    /**
    *   This function is called when the log out button is pressed.
    *   It authenticates , logges out and redirects to home.
    * 
    **/
    public function logout()
    {
        auth()->logout();

        return redirect("/");
    }
    
}
