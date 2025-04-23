<?php

namespace App\Http\Controllers;

use App\Models\Userm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsermController extends Controller
{
    public function create(){

        return view('frm_user'); //es el inocio de sesion

    }
   
    public function store(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        
    ]);

    Userm::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' =>$request->password,
        
    ]);

    return redirect()->back()->with('success', 'Usuario registrado correctamente.');
}



       //registro de usuario
public function create1(){

    return view('registro_user');

}
public function store1(Request $request){
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8',
        
    ]);

    Userm::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'rol' => $request->rol,
        
    ]);

    return redirect()->back()->with('success', 'Usuario registrado correctamente.');
}
}