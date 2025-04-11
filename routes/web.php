<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

//listarrol
Route::get('/formularioRol',[LoginController::class,'create']);
Route::post('/crearCurso',[RoleController::class,'store'])->name('roles.store');