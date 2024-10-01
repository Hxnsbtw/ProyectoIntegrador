<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home', function () {
    return view('home.homeIndex');
});

Route::get('/Dashboard', function () {
    return view('dashboard.dashboardIndex');
});

/* RUTA DIFERENTES */

Route::get('/Clientes/Gestionar',[ClientController::class,'index'])->name("clientes");
Route::get('/Clientes/Agregar',[ClientController::class,'agregar'])->name("clientes");