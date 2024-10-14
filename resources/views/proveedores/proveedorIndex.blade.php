@extends('layouts.plantilla')


@section('contenido')

<section class="container-tabla">
    <h2 class="titulo-tabla"> Proveedores</h2>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Razon Social</th>
                <th>NIT</th>
                <th>Correo electronico</th>               
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class="tabla-categorias">
            @foreach ($proveedores as $proveedor)
            <tr>                
                <td>{{$proveedor->id}}</td>
                <td>{{$proveedor->razon_social}}</td>
                <td>{{$proveedor->NIT}}</td>
                <td>{{$proveedor->contacto}}</td>
                
                <td >
                    <a href="{{route('proveedores.show',[$proveedor->id])}}">
                    <img src={{asset('Assets/view.png')}} alt="">
                 </a>
                 <a href="{{route('proveedores.edit',[$proveedor->id])}}">
                    <img src={{asset('Assets/edit.png')}} alt="">
                 </a>
                 <a href="{{route('proveedores.destroy',[$proveedor->id])}}">
                 </a>
                 
                 <form action="{{route('proveedores.destroy',[$proveedor->id])}}" method="POST" onsubmit="return confimarEliminacion()">

                    {{-- permite gemrar el token para enviar por post --}}
                    @csrf
                    {{-- agregar metodo delete --}}
                    @method('DELETE')
                    <input type="image" src={{asset('Assets/delete.png')}}></input>

                 </form>
                 
                 <script>
                    function confimarEliminacion() {
                        return confirm('¿Seguro deseas eliminar?'); // Muestra el mensaje de confirmación
                    }
                </script>
                </td>                                
            </tr>
            @endforeach           
        </tbody>
        {{-- paginacion links --}}    

@endsection