<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function create(){

        return view('listarrol');


    }
    
    public function showLoginForm() {
        return view('frm_user'); // Vista que creamos
    }

    public function authenticate(Request $request) {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->intended('/')->with('success', '¡Bienvenido!');
        }

        return back()->with('error', 'Credenciales incorrectas');
    }
}

