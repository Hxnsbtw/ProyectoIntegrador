<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ProveedorController;

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

/* RUTA DE CLIENTES */

Route::get('/Clientes/Gestionar',[ClientController::class,'index'])->name("clientes");
Route::get('/Clientes/Agregar',[ClientController::class,'agregar'])->name("clientesagregar");

/* RUTA DE CLIENTES */

Route::get('/Usuarios/Gestionar',[UsuarioController::class,'index'])->name("usuarios");
Route::get('/Usuarios/Agregar',[UsuarioController::class,'agregar'])->name("usuariosagregar");

/* RUTA DE CLIENTES */

Route::get('/Instructores/Gestionar',[InstructorController::class,'index'])->name("instructores");
Route::get('/Instructores/Agregar',[InstructorController::class,'agregar'])->name("instructoresagregar");

/* RUTA DE CLIENTES */

Route::get('/Inventario/Gestionar',[InventarioController::class,'index'])->name("inventario");
Route::get('/Inventario/Agregar',[InventarioController::class,'agregar'])->name("inventarioagregar");

/* RUTA DE CLIENTES */

Route::get('/Proveedor/Gestionar',[ProveedorController::class,'index'])->name("proveedor");
Route::get('/Proveedor/Agregar',[ProveedorController::class,'agregar'])->name("proveedoragregar");

/* RUTAS TIPO RESOURCE */

Route::resource('proveedores', ProveedorController::class);
