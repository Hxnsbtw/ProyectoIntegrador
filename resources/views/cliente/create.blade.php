@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Crear Nuevo Cliente</h2>
        <form action="{{ route('clientes.store') }}" enctype="multipart/form-data" method="POST">
            {{-- Genera el token de seguridad --}}
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

            <!-- Campo Número de Identificación -->
            <div class="form-group">
                <label for="NumeroIdentificacion">Número de Identificación</label>
                <input type="text" id="NumeroIdentificacion" name="NumeroIdentificacion" required>
            </div>

            <!-- Campo Correo Electrónico -->
            <div class="form-group">
                <label for="correo">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" required>
            </div>

            <!-- Campo Celular -->
            <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" id="celular" name="celular">
            </div>

            <!-- Campo Peso -->
            <div class="form-group">
                <label for="peso">Peso (kg)</label>
                <input type="number" id="peso" name="peso" step="0.1">
            </div>

            <!-- Campo Altura -->
            <div class="form-group">
                <label for="altura">Altura (m)</label>
                <input type="number" id="altura" name="altura" step="0.01">
            </div>

            <!-- Campo Fecha de Ingreso -->
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso">
            </div>
            
            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Guardar Cliente</button>
            </div>
        </form>
    </div>
</div>
@endsection
