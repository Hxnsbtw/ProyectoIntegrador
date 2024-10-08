<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    //
    public function index(){
        return view('inventario.inventarioIndex');
    }
    public function agregar(){
        return view('inventario.inventarioagregar');
    }
}
