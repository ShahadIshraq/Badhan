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
    	$userInf = User::where('id', '=', auth()->user()->id)->get();

    	if(request('area') == '') $donors = User::where('bloodGroup', '=', request('bloodGroup'))
    		->where('hall' , '=' , $userInf[0]->hall )->get();
    	else $donors = User::where('bloodGroup', '=', request('bloodGroup'))
    		->where('area', '=', request('area'))
    	->where('hall' , '=' , $userInf[0]->hall )->get();

    	return view('result',compact('donors'));
    }
}
