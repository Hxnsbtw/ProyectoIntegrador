@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Actualizar Clase</h2>
        <form action="{{ route('clases.update', $clase->id) }}" enctype="multipart/form-data" method="POST">
            {{-- Generar token --}}
            @csrf

            {{-- Método PATCH para actualizar --}}
            @method('PATCH')

            <!-- Campo Descripción -->
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" id="descripcion" name="descripcion" required value="{{ $clase->descripcion }}">
            </div>

            <!-- Campo Fecha -->
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" id="fecha" name="fecha" required value="{{ $clase->fecha }}">
            </div>

            <!-- Campo Duración -->
            <div class="form-group">
                <label for="duracion">Duración (minutos)</label>
                <input type="number" id="duracion" name="duracion" required min="1" value="{{ $clase->duracion }}">
            </div>

            <!-- Campo Hora de Inicio -->
            <div class="form-group">
                <label for="hora_inicio">Hora de Inicio</label>
                <input type="time" id="hora_inicio" name="hora_inicio" required value="{{ $clase->hora_inicio }}">
            </div>

            <!-- Campo Tipo de Clase -->
            <div class="form-group">
                <label for="tipo_clase">Tipo de Clase</label>
                <input type="text" id="tipo_clase" name="tipo_clase" required value="{{ $clase->tipo_clase }}">
            </div>

            <!-- Campo Cliente -->
            <div class="form-group">
                <label for="cliente_id">Cliente</label>
                <select id="cliente_id" name="cliente_id" required>
                    <option value="" disabled>Selecciona un cliente</option>
                    @foreach($clientes as $cliente)
                        <option value="{{ $cliente->id }}" {{ $clase->cliente_id == $cliente->id ? 'selected' : '' }}>
                            {{ $cliente->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Campo Instructor -->
            <div class="form-group">
                <label for="instructor_id">Instructor</label>
                <select id="instructor_id" name="instructor_id" required>
                    <option value="" disabled>Selecciona un instructor</option>
                    @foreach($instructores as $instructor)
                        <option value="{{ $instructor->id }}" {{ $clase->instructor_id == $instructor->id ? 'selected' : '' }}>
                            {{ $instructor->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Actualizar Clase</button>
            </div>
        </form>
    </div>
</div>
@endsection
