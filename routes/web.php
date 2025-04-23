<?php

namespace App\Http\Controllers;

use App\Models\Userm;
use Illuminate\Support\Facades\Route;

//listarrol
Route::get('/home',[LoginController::class,'create'])->name('home');
Route::post('/inicio_sesion',[UsermController::class,'store']);


//oute::get('/frmuser',[UsermController::class,'create'])->name('login');//es el inocio de sesion
//Route::post('/frmuser2',[UsermController::class,'store'])->name('user.store');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');//
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/registro_user',[UsermController::class,'create1'])->name('registro');//gesitro de usuario
Route::post('/frmuser2',[UsermController::class,'store'])->name('user.store');

