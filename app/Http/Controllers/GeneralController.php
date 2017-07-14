<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class GeneralController extends Controller
{
    public function show()
    {
    	$this->validate(request(), [
       
                'bloodGroup' => 'required',
                'area'=> 'nullable'
            ]);

    	$donors = User::where('bloodGroup', '=', request('bloodGroup'))->get();

    	return view('result',compact('donors'));
    }
}
