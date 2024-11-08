<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $activos = Activo::orderBy('id','ASC')->paginate(10);
        return view('activo.index', compact('activos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $proveedores=Proveedor::orderBy('id','DESC')
        ->select('proveedores.id','proveedores.razon_social')
        ->get();
        return view('activo.create',compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validación de los datos
    $request->validate([
        'nombre' => 'required',
        'serial' => 'required',
        'estado' => 'required|in:Activo,Inactivo',
        'imagen' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        
    ]);

    // Procesar imagen
    if ($request->hasFile('imagen')) {
        $imagen = $request->file('imagen');
        $nombreImagen = time() . '.' . $imagen->getClientOriginalExtension();
        $imagen->move(public_path('Assets'), $nombreImagen);
    }

    // Crear y guardar el nuevo activo
        $activo = new Activo;
        $activo->nombre = $request->nombre;
        $activo->serial = $request->serial;
        $activo->estado = $request->estado;
        $activo->imagen = $nombreImagen;
        $activo->proveedor_id = $request->proveedor_id;

        $activo->save();

    // Redirigir a la lista de activos con un mensaje de éxito
    return redirect()->route('activos.index')->with('success', 'Activo creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Activo $activo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activo $activo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Activo $activo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activo $activo)
    {
        //
    }
}
