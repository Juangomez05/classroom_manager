<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'Estas credenciales no coinciden con nuestros registros. Por favor, verifica tus datos e intenta de nuevo.',
        ])->onlyInput('email');
    }

    public function login(){
       
        return view('login.login');
    }

    public function olvidocontrasenia(){
        return view('login.olvidocontrasenia');
    }
}
