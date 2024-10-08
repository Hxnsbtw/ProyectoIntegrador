<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;


use Illuminate\Http\Request;

class ProveedorController extends Controller

{
    //
    public function index(){
        
        $proveedores = Proveedor::orderBy('id','ASC')->paginate(10);

        return view ('proveedores.proveedorIndex', compact('proveedores'));
    }


    public function agregar(){
        return view('proveedores.proveedoragregar');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Activos $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activos $proveedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activos $proveedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activos $proveedores)
    {
        //
    }
}   
