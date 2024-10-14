@extends('layouts.plantilla')

@section('contenido')
<div class="container-formulario">
    <div class="card formulario">
        <h2>Actualizar Proveedor</h2>
        <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
            {{-- agregar directiva para que se genere un token --}}
            @csrf

            {{-- agregar metodo patch --}}
            @method('PATCH')

            <!-- Campo Razon Social -->
            <div class="form-group">
                <label for="razon_social">Razón Social</label>
                <input type="text" id="razon_social" name="razon_social" required value="{{ $proveedor->razon_social }}">
            </div>

            <!-- Campo NIT -->
            <div class="form-group">
                <label for="NIT">NIT</label>
                <input type="text" id="NIT" name="NIT" required value="{{ $proveedor->NIT }}">
            </div>

            <!-- Campo Contacto -->
            <div class="form-group">
                <label for="contacto">Contacto</label>
                <input type="text" id="contacto" name="contacto" required value="{{ $proveedor->contacto }}">
            </div>

            <!-- Botón Guardar -->
            <div class="form-group">
                <button type="submit">Actualizar Proveedor</button>
            </div>
        </form>
    </div>
</div>
@endsection