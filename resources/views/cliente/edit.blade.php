@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Actualizar Cliente</h2>
        <form action="{{ route('clientes.update', $cliente->id) }}" enctype="multipart/form-data" method="POST">
            {{-- Genera el token de seguridad --}}
            @csrf
            {{-- agregar metodo patch --}}
            @method('PATCH')
            
            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ $cliente->nombre }}" required>
            </div>

            <!-- Campo Apellido -->
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" value="{{ $cliente->apellido }}" required>
            </div>

            <!-- Campo Número de Identificación -->
            <div class="form-group">
                <label for="NumeroIdentificacion">Número de Identificación</label>
                <input type="text" id="NumeroIdentificacion" name="NumeroIdentificacion" value="{{ $cliente->NumeroIdentificacion }}" required>
            </div>

            <!-- Campo Correo Electrónico -->
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" value="{{ $cliente->correo }}" required>
            </div>

            <!-- Campo Celular -->
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular" value="{{ $cliente->celular }}" required>
            </div>

            <!-- Campo Peso -->
            <div class="form-group">
                <label for="peso">Peso (kg)</label>
                <input type="number" id="peso" name="peso" step="0.1" value="{{ $cliente->peso }}" required>
            </div>

            <!-- Campo Altura -->
            <div class="form-group">
                <label for="altura">Altura (m)</label>
                <input type="number" id="altura" name="altura" step="0.01" value="{{ $cliente->altura }}" required>
            </div>

            <!-- Campo Fecha de Ingreso -->
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" value="{{ $cliente->fecha_ingreso }}" required>
            </div>
            
            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Actualizar Cliente</button>
            </div>
        </form>
    </div>
</div>
@endsection
