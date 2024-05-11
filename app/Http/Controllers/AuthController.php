<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        return redirect()->back()->with('success', 'your message,here');
    }
    public function loginForm(){
        return view("auth.login");
    }
}
