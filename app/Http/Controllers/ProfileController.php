<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use App\User;

class ProfileController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }


    public function dashboard($user)
    {
    	$donations = Donation::where('user_id', '=', $user)->get();
    	$userInformation = User::where('id' , '=' , $user)->get();

    	return view('profile.dashboard',compact('donations','userInformation'));
    }



    public function edit($user)
    {
    	$userInformation = User::where('id' , '=' , $user)->get();
    	return view('profile.edit',compact('userInformation'));
    }

}
