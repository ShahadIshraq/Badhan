<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
}
