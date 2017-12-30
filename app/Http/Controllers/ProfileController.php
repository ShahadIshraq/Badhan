<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donation;
use App\User;
use App\Contact;

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
        $contacts = Contact::where('user_id', '=', $user)->get();

    	return view('profile.dashboard',compact('donations','userInformation','contacts'));
    }



    public function edit($user)
    {
    	$userInformation = User::where('id' , '=' , $user)->get();
        $contacts = Contact::where('user_id', '=', $user)->get();
    	return view('profile.edit',compact('userInformation','contacts'));
    }

    public function save($user_id)
    {
        $this->validate(request(), [
                'name' => 'required',
                'area' => 'nullable',                
                'room' => 'numeric|min:100|nullable',
                'password' => 'confirmed' ,

            ]);

        // if (User::where('id', '=', request('id'))->exists()) {
        //     $messages = array("Student ID already registered.");
        //     if(User::find(request('id'))->confirmed == 0)
        //     {
        //         $messages[] = "Sign up request awaiting admin approval.";
        //         $title = "Problem with the request.";
        //         return view('message')->with(['title'=>$title,'messages'=>$messages]);
        //     }    
        // }   
        

        //return view("test");
        $user = User::find($user_id);
        $user->name = request('name');
        if (!(empty(request('password')))){
            $user->password = bcrypt(request('password'));
        }
        if(!(empty(request('hall')))) { 
            $user->hall = request('hall');
        }   
        $user->room = request('room');
        $user->area = request('area');

        $user->save();

        $contacts = Contact::where('user_id', '=', $user_id)->get();
        
        foreach ($contacts as $_contact) {
            $contact = Contact::where('number', '=', $_contact->number)->get();
            $contact[0]->number = request($_contact->number);
            $contact[0]->save();
        }
        if(!(empty(request('password')))) {
            auth()->logout();
            $messages = array("Your edits have been saved successfully. \nPlease login again.");
        }
        else   $messages = array("Your edits have been saved successfully");
        $title = "Successfull!";
        return view('message',compact('messages','title'));
    }

}
