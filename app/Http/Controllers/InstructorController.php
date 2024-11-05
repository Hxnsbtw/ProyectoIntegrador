<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;

class InstructorController extends Controller  
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $instructores=Instructor::orderBy('id','ASC')->paginate(10);
        return view ('instructor.index', compact('instructores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('instructor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:100',
        'apellido' => 'required|string|max:100',
        'identificacion' => 'required|string|max:50|unique:instructores,identificacion',
        'celular' => 'nullable|string|max:20',
        'correo' => 'required|email|max:150|unique:instructores,correo',
        'especializacion' => 'nullable|string|max:150',
    ]);

    // Crear una nueva instancia de Instructor
    $instructor = new Instructor();
    $instructor->nombre = $validatedData['nombre'];
    $instructor->apellido = $validatedData['apellido'];
    $instructor->identificacion = $validatedData['identificacion'];
    $instructor->celular = $validatedData['celular'] ?? null;
    $instructor->correo = $validatedData['correo'];
    $instructor->especializacion = $validatedData['especializacion'] ?? null;

    // Guardar el instructor en la base de datos
    $instructor->save();

    // Redirigir a la lista de instructores con un mensaje de éxito
    return redirect()->route('instructores.index')->with('success', 'Instructor creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $instructor = Instructor::findOrFail($id);
        return view('instructor.show', compact('instructor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $instructor = Instructor::findOrFail($id);
        return view('instructor.edit', ["instructor"=>$instructor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
        'nombre' => 'required|max:100',
        'apellido' => 'required|max:100',
        'identificacion' => 'required|max:50|unique:instructores,identificacion,' . $id,
        'celular' => 'nullable|max:20',
        'correo' => 'nullable|email|max:150',
        'especializacion' => 'nullable|max:150',
    ]);

    // Buscar el instructor por su ID
    $instructor = Instructor::findOrFail($id);

    // Actualizar los datos del instructor con los datos validados
    $instructor->nombre = $validatedData['nombre'];
    $instructor->apellido = $validatedData['apellido'];
    $instructor->identificacion = $validatedData['identificacion'];
    $instructor->celular = $validatedData['celular'] ?? null;
    $instructor->correo = $validatedData['correo'] ?? null;
    $instructor->especializacion = $validatedData['especializacion'] ?? null;

    // Guardar los cambios en la base de datos
    $instructor->save();

    // Redirigir a la lista de instructores con un mensaje de éxito
    return redirect()->route('instructores.index')->with('success', 'Instructor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $instructor = Instructor::findOrFail($id);
        $instructor->delete();
        return redirect()->route('instructores.index');
    }
}
