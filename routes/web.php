<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('/formularioRol',[RoleController::class,'listarrol']);
Route::post('/crearCurso',[RoleController::class,'store'])->name('roles.store');