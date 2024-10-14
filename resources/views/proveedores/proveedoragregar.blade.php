@extends('layouts.plantilla')


@section('contenido')
    {{-- mostrar formulario para crear nueva categoria --}}
    <div class= "container-formulario">
        <div class="card formulario">
            <h2>Crear Nueva Proveedor</h2>
            <form action="{{route('proveedores.store')}}" method="POST">
                {{-- agregar directica para qu se genere un token --}}
                @csrf
                <!-- Campo Nombre -->
                <div class="form-group">
                    <label for="razon_social">Razón Social de la empresa</label>
                    <input type="text" id="razon_social" name="razon_social" required>
                </div>
                <!-- Campo Descripción -->
                <div class="form-group">
                    <label for="NIT">NIT</label>
                    <textarea id="NIT" name="NIT" rows="4"></textarea>
                </div>
                <!-- Campo Status -->
                <div class="form-group">
                    <label for="contacto">Correo electronico</label>
                    <input type="text" id="contacto" name="contacto">
                    </select>
                </div>
                <!-- Botón Guardar -->
                <div class="form-group">
                    <button type="submit">Guardar Proveedor</button>
                </div>
            </form>
        </div>
        </div>
@endsection