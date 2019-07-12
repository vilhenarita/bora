<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuiaAuthenticationController extends Controller
{
    public function authentication(Request $request){
    	$email = $request->input("email");
    	$password = $request->input("password");
    }

    
}
