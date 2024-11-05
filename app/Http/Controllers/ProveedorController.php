<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProveedorController extends Controller

{
    //

    public function __construct()
    {
        $this->middleware('can:proveedores.create')->only(['create','store']);
    }

    public function index(){
        
        $proveedores = Proveedor::orderBy('id','ASC')->paginate(10);    
        return view ('proveedores.proveedorIndex', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedores.proveedoragregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validar los datos del formulario
    $validatedData = $request->validate([
        'razon_social' => 'required|max:150',
        'NIT' => 'required|max:20|unique:proveedores,NIT',
        'contacto' => 'nullable|max:100',
    ]);

    // Crear una nueva instancia de Proveedor
    $proveedor = new Proveedor();
    $proveedor->razon_social = $validatedData['razon_social'];
    $proveedor->NIT = $validatedData['NIT'];
    $proveedor->contacto = $validatedData['contacto']?? null;

    // Guardar el proveedor en la base de datos
    $proveedor->save();

    // Redirigir a la lista de proveedores con un mensaje de éxito
    return redirect()->route('proveedores.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id) {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id) {
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // Validar los datos del formulario
        $validatedData = $request->validate([
        'razon_social' => 'required|max:255',
        'NIT' => 'required',
        'contacto' => 'required',
    ]);

    // Buscar el proveedor por ID y actualizar
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->razon_social = $validatedData['razon_social'];
        $proveedor->NIT = $validatedData['NIT'];
        $proveedor->contacto = $validatedData['contacto'];

    // Guardar el proveedor actualizado
        $proveedor->save();

    // Redirigir a la lista de proveedores con un mensaje de éxito
    return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();
        return redirect()->route('proveedores.index');
    }
}   
