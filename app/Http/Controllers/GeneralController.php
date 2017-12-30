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

    	if(request('area') == '')  $conditions = ['bloodGroup' => request('bloodGroup') , 'hall' => $userInf[0]->hall ];
    	else $conditions = ['bloodGroup' => request('bloodGroup') , 'hall' => $userInf[0]->hall , 'area' => request('area') ];
        $donors = User::where($conditions)->get();
    	return view('result',compact('donors'));
    }
}
