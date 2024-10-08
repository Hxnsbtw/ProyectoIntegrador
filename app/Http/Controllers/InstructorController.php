<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //
    public function index(){
        return view('instructores.instructoresIndex');
    }
    public function agregar(){
        return view('instructores.instructoresagregar');
    }
}
