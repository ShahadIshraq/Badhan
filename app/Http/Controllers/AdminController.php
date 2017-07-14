<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function approvals()
    {
    	if(!Admin::where('user_id', '=', auth()->user()->id)->exists())
    	{
    		$title = "Access denied.";
    		$messages = array('You do not have admin authorization to view this page');
    		return view('message',compact('title','messages'));
    	}
    	// $hall = User::select('hall')->where('confirmed', '=', '0')->get();

    	$requests = User::where('confirmed', '=', '0')->get();
    	return view('profile.approvals',compact('requests'));
    }


    public function approve($user)
    {
        //return view('test');
        if(!Admin::where('user_id', '=', auth()->user()->id)->exists())
        {
            $title = "Access denied.";
            $messages = array('You do not have admin authorization to view this page');
            return view('message',compact('title','messages'));
        }
        // $hall = User::select('hall')->where('confirmed', '=', '0')->get();

        User::where('id', '=', $user )->update(['confirmed' => 1]);
        $requests = User::where('confirmed', '=', '0')->get();
        return view('profile.approvals',compact('requests'));   
    }

    public function remove($user)
    {
        //return view('test');
        if(!Admin::where('user_id', '=', auth()->user()->id)->exists())
        {
            $title = "Access denied.";
            $messages = array('You do not have admin authorization to view this page');
            return view('message',compact('title','messages'));
        }
        // $hall = User::select('hall')->where('confirmed', '=', '0')->get();

        User::where('id', '=', $user )->delete();
        $requests = User::where('confirmed', '=', '0')->get();
        return view('profile.approvals',compact('requests'));   
    }
}
