<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function index(){
        return view('usuarios.usuariosIndex');
    }
    public function agregar(){
        return view('usuarios.usuariosagregar');
    }
}
