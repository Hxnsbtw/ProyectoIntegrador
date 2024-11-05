@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Crear Nuevo Activo</h2>
        <form action="{{ route('activos.store') }}" enctype="multipart/form-data" method="POST">
            {{-- Genera el token de seguridad --}}
            @csrf
            
            <!-- Campo Nombre -->
            <div class="form-group">
                <label for="nombre">Nombre del Activo</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            
            <!-- Campo Serial -->
            <div class="form-group">
                <label for="serial">Serial</label>
                <input type="text" id="serial" name="serial" required>
            </div>
            
            <!-- Campo Estado -->
            <div class="form-group">
                <label for="estado">Estado</label>
                <select id="estado" name="estado" required>
                    <option value="" disabled selected>Selecciona el estado</option>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            
            <!-- Campo Imagen -->
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen">
            </div>
            
            <!-- Campo Proveedor -->
            <div class="form-group">
                <label for="proveedor">Proveedor</label>
                <select id="proveedor_id" name="proveedor_id" required>
                    <option value="" disabled selected>Selecciona el proveedor</option>
                    @foreach($proveedores as $proveedor)
                        <option value="{{ $proveedor->id }}">{{ $proveedor->razon_social }}</option>
                    @endforeach
                </select>
            </div>
            
            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Guardar Activo</button>
            </div>
        </form>
    </div>
</div>
@endsection
