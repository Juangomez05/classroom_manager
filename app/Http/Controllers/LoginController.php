<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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
        $credentials['remember'] = (bool)$request->remember;

        $user = User::where('email', $credentials['email'])->first();

        if (!$user || !Hash::check($credentials['password'], $user->password)) {
            $message = 'Estas credenciales no coinciden con nuestros registros. Por favor, verifica tus datos e intenta de nuevo.';
            return back()->withErrors([
                'email' => $message,
            ])->onlyInput('email')
            ->with('alert', $message);
        }

        Auth::login($user, $credentials['remember']);

        $request->session()->regenerate();

        return redirect()->intended('/');
    }

    public function login(){
       
        return view('login.login');
    }

    public function olvidocontrasenia(){
        return view('login.olvidocontrasenia');
    }
}