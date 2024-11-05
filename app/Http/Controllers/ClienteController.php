<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes=Cliente::orderBy('id','ASC')->paginate(10);
        return view ('cliente.Index', compact('clientes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los campos
    $request->validate([
        'nombre' => 'required|string|max:100',
        'apellido' => 'required|string|max:100',
        'NumeroIdentificacion' => 'required|string|max:50|unique:clientes,NumeroIdentificacion',
        'correo' => 'required|string|email|max:150|unique:clientes,correo',
        'celular' => 'nullable|string|max:20',
        'peso' => 'nullable|numeric|min:0',
        'altura' => 'nullable|numeric|min:0',
        'fecha_ingreso' => 'nullable|date',
    ]);

    // Creación de un nuevo cliente
    $cliente = new Cliente;
    $cliente->nombre = $request->nombre;
    $cliente->apellido = $request->apellido;
    $cliente->NumeroIdentificacion = $request->NumeroIdentificacion;
    $cliente->correo = $request->correo;
    $cliente->celular = $request->celular;
    $cliente->peso = $request->peso;
    $cliente->altura = $request->altura;
    $cliente->fecha_ingreso = $request->fecha_ingreso;
    $cliente->save();

    // Redireccionar a la lista de clientes después de guardar
    return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', ["cliente"=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
        'nombre' => 'required|max:255',
        'apellido' => 'required|max:255',
        'NumeroIdentificacion' => 'required|numeric',
        'correo' => 'required|email',
        'celular' => 'required|numeric',
        'peso' => 'required|numeric',
        'altura' => 'required|numeric',
        'fecha_ingreso' => 'required|date',
    ]);

    // Buscar el cliente por ID y actualizar sus datos
    $cliente = Cliente::findOrFail($id);
    
    $cliente->nombre = $validatedData['nombre'];
    $cliente->apellido = $validatedData['apellido'];
    $cliente->NumeroIdentificacion = $validatedData['NumeroIdentificacion'];
    $cliente->correo = $validatedData['correo'];
    $cliente->celular = $validatedData['celular'];  
    $cliente->peso = $validatedData['peso'];
    $cliente->altura = $validatedData['altura'];
    $cliente->fecha_ingreso = $validatedData['fecha_ingreso'];

    // Guardar los cambios en el cliente
    $cliente->save();

    // Redirigir a la lista de clientes con un mensaje de éxito
    return redirect()->route('clientes.index')->with('success', 'Cliente actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
