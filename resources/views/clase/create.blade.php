@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Crear Nueva Clase</h2>
        <form action="{{ route('clases.store') }}" method="POST">
            {{-- Token de seguridad --}}
            @csrf
            
            <!-- Campo Descripción -->
            <div class="form-group">
                <label for="descripcion">Descripción de la Clase</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            
            <!-- Campo Fecha -->
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            
            <!-- Campo Duración -->
            <div class="form-group">
                <label for="duracion">Duración (en minutos)</label>
                <input type="number" id="duracion" name="duracion" required min="1">
            </div>
            
            <!-- Campo Hora de Inicio -->
            <div class="form-group">
                <label for="hora_inicio">Hora de Inicio</label>
                <input type="time" id="hora_inicio" name="hora_inicio" required>
            </div>
            
            <!-- Campo Tipo de Clase -->
            <div class="form-group">
                <label for="tipo_clase">Tipo de Clase</label>
                <input type="text" id="tipo_clase" name="tipo_clase" required>
            </div>
            
            <!-- Campo Cliente -->
            <div class="form-group">
                <label for="cliente_id">Cliente</label>
                <select id="cliente_id" name="cliente_id" required>
                    <option value="" disabled selected>Selecciona el cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Campo Instructor -->
            <div class="form-group">
                <label for="instructor_id">Instructor</label>
                <select id="instructor_id" name="instructor_id" required>
                    <option value="" disabled selected>Selecciona el instructor</option>
                    @foreach($instructores as $instructor)
                        <option value="{{ $instructor->id }}">{{ $instructor->nombre }} {{ $instructor->apellido }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Guardar Clase</button>
            </div>
        </form>
    </div>
</div>
@endsection
