<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function listarrol(){

        return view('listarrol');


    }

    public function store(Request $request){


        $rol = new Role();

        $rol->name=$request->name;
        $rol->description=$request->description;
        $rol->state=$request->state;
        $rol->save();

        return $rol;

    }
}
