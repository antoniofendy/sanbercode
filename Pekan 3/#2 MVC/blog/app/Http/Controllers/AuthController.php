<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function welcome_post(Request $request){
        return view('welcome', ['f_name'=>$request['f_name'], 'l_name'=>$request['l_name']]);
    }
}
