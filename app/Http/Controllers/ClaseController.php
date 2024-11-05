<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Cliente;
use App\Models\Instructor;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clases = Clase::orderBy('id','ASC')->paginate(10);
        return view('clase.index', compact('clases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Obtener todos los clientes e instructores para las opciones de selección
        $clientes = Cliente::all();
        $instructores = Instructor::all();

        // Retornar la vista del formulario con los datos necesarios
        return view('clase.create', compact('clientes', 'instructores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validar los datos del formulario
    $validatedData = $request->validate([
        'descripcion' => 'required|max:255',
        'fecha' => 'required|date',
        'duracion' => 'required|integer|min:1',
        'hora_inicio' => 'required|date_format:H:i',
        'tipo_clase' => 'required|string|max:100',
        'cliente_id' => 'required|exists:clientes,id',
        'instructor_id' => 'required|exists:instructores,id',
    ]);

    // Crear una nueva instancia de Clase
        $clase = new Clase();
        $clase->descripcion = $validatedData['descripcion'];
        $clase->fecha = $validatedData['fecha'];
        $clase->duracion = $validatedData['duracion'];
        $clase->hora_inicio = $validatedData['hora_inicio'];
        $clase->tipo_clase = $validatedData['tipo_clase'];
        $clase->cliente_id = $validatedData['cliente_id'];
        $clase->instructor_id = $validatedData['instructor_id'];

    // Guardar la clase en la base de datos
        $clase->save();

    // Redirigir a la lista de clases con un mensaje de éxito
    return redirect()->route('clases.index')->with('success', 'Clase creada exitosamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $clases = Clase::with(['cliente', 'instructor'])->findOrFail($id);
        return view('clase.show', compact('clases'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        // Buscar la clase por su ID
        $clase = Clase::findOrFail($id);

    // Obtener todos los clientes e instructores
        $clientes = Cliente::all();
        $instructores = Instructor::all();

    // Pasar la clase, clientes e instructores a la vista
        return view('clase.edit', compact('clase', 'clientes', 'instructores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    
    {        
        // Validar los datos del formulario
        $validatedData = $request->validate([
        'descripcion' => 'required|max:255',
        'fecha' => 'required|date',
        'duracion' => 'required|integer|min:1', // duración en minutos
        'hora_inicio' => 'required|date_format:H:i',
        'tipo_clase' => 'required|max:100',
        'cliente_id' => 'required|exists:clientes,id',
        'instructor_id' => 'required|exists:instructores,id',
    ]);

    // Buscar la clase por ID
        $clase = Clase::findOrFail($id);

    // Actualizar los campos de la clase con los datos validados
        $clase->descripcion = $validatedData['descripcion'];
        $clase->fecha = $validatedData['fecha'];
        $clase->duracion = $validatedData['duracion'];
        $clase->hora_inicio = $validatedData['hora_inicio'];
        $clase->tipo_clase = $validatedData['tipo_clase'];
        $clase->cliente_id = $validatedData['cliente_id'];
        $clase->instructor_id = $validatedData['instructor_id'];

    // Guardar los cambios en la base de datos
    $clase->save();

    // Redirigir a la vista de listado de clases con un mensaje de éxito
    return redirect()->route('clases.index')->with('success', 'Clase actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $clase = Clase::findOrFail($id);
        $clase->delete();
        return redirect()->route('clases.index');
    }
}
