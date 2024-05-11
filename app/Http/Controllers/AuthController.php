<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $validated = $request->validate(['email'=>'required','password'=> 'required']);
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }
        return redirect()->back()->with('failed', 'Credenciales incorrectas');
    }
    public function loginForm(){
        return view("auth.login");
    }
}
