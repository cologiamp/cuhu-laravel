<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function signin(Request $request)
    {
    	//dd('ok');
    	$this->validate($request, [
    		'email' => 'required|email',
    		'password' => 'required',
    	]);

    	if(!auth()->attempt($request->only('email', 'password'))) 
    	{
    		return back()->with('status', 'Wrong login details');
    	}
    	

    	return redirect()->route('secure');
    }
}
