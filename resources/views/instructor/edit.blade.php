@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Actualizar Instructor</h2>
        <form action="{{ route('instructores.update', $instructor->id) }}" method="POST">
            {{-- agregar directiva para que se genere un token --}}
            @csrf

            {{-- agregar metodo patch --}}
            @method('PATCH')

            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" value="{{ $instructor->nombre }}" required>
            </div>

            <!-- Campo Apellido -->
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" value="{{ $instructor->apellido }}" required>
            </div>

            <!-- Campo Identificación -->
            <div class="form-group">
                <label for="identificacion">Identificación</label>
                <input type="text" id="identificacion" name="identificacion" value="{{ $instructor->Identificacion }}" required>
            </div>

            <!-- Campo Celular -->
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular" value="{{ $instructor->celular }}" required>
            </div>

            <!-- Campo Correo -->
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" value="{{ $instructor->correo }}" required>
            </div>

            <!-- Campo Especialización -->
            <div class="form-group">
                <label for="especializacion">Especialización</label>
                <input type="text" id="especializacion" name="especializacion" value="{{ $instructor->Especializacion }}" required>
            </div>

            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Actualizar Instructor</button>
            </div>
        </form>
    </div>
</div>
@endsection
