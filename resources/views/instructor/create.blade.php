@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Agregar Nuevo Instructor</h2>
        <form action="{{ route('instructores.store') }}" method="POST">
            @csrf

            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <!-- Campo Apellido -->
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>

            <!-- Campo Identificación -->
            <div class="form-group">
                <label for="identificacion">Número de Identificación</label>
                <input type="text" id="identificacion" name="identificacion" required>
            </div>

            <!-- Campo Celular -->
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular">
            </div>

            <!-- Campo Correo Electrónico -->
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo">
            </div>

            <!-- Campo Especialización -->
            <div class="form-group">
                <label for="especializacion">Especialización</label>
                <input type="text" id="especializacion" name="especializacion">
            </div>

            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Guardar Instructor</button>
            </div>
        </form>
    </div>
</div>
@endsection
