<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\User;
use App\Contact;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('auth.signup');
    }

    public function store()
    {
        
        

        $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|unique:users' ,
                'id' => 'numeric|min:1001|max:9919200|nullable|unique:users' ,
                'dateOfBirth' => 'date|date_format:d-m-Y|nullable' ,
                'bloodGroup' => 'required',
                'hall' => 'required',
                'room' => 'numeric|min:100|nullable',
                'lastDonation' => 'date|date_format:d-m-Y|nullable'
            ]);

        if (User::where('id', '=', request('id'))->exists()) {
            $messages = array("Student ID already registered.");
            if(User::find(request('id'))->confirmed == 0)
            {
                $messages[] = "Sign up request awaiting admin approval.";
                $title = "Problem with the request.";
                return view('message')->with(['title'=>$title,'messages'=>$messages]);
            }    
        }   
        

        //return view("test");
        $user = new User;

        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->id = request('id');
        // $date = Date::createFromFormat('m/d/Y', $input_string.' 00:00:00');
        // $mysql_date_string = $date->format('Y-m-d H:i:s');
        $date = \DateTime::createFromFormat('d-m-Y', request('dateOfBirth'));
        
        if (!(empty(request('dateOfBirth')))){
            $user->dateOfBirth =  $date;
        }
        
        $user->bloodGroup = request('bloodGroup');
        $user->hall = request('hall');
        $user->room = request('room');
        $user->area = request('area');
        $date = \DateTime::createFromFormat('d-m-Y', request('lastDonation'));
        if (!(empty(request('lastDonation')))){
            $user->lastDonation =  $date;
        }

        

        $user->save();

        $contact = new Contact;
        $contact->user_id = request('id');
        $contact->number = request('number');
        $contact->save();

        //auth()->attempt(request(['id' , 'password']));
        auth()->logout();

        $title = "Successfull!";
        $messages = array("Your request has been submitted for admin approval");
        return view('message',compact('messages','title'));
     }
}
