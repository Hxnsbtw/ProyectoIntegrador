@extends('layouts.plantilla')


@section('contenido')

<section class="container-tabla">
    <h2 class="titulo-tabla"> Clientes</h2>
    <table >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Identificacion</th>               
                <th>Correo</th>
                <th>Celular</th>
                <th>Peso</th>
                <th>Altura</th>
                <th>Fecha Ingreso</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class="tabla-clientes">
            @foreach ($clientes as $cliente)
            <tr>                
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->NumeroIdentificacion}}</td>
                <td>{{$cliente->correo}}</td>
                <td>{{$cliente->celular}}</td>
                <td>{{$cliente->peso}}</td>
                <td>{{$cliente->altura}}</td>
                <td>{{$cliente->fecha_ingreso}}</td>
                
                <td >
                    <a href="{{route('clientes.show',[$cliente->id])}}">
                    <img src={{asset('Assets/view.png')}} alt="">
                 </a>
                 <a href="{{route('clientes.edit',[$cliente->id])}}">
                    <img src={{asset('Assets/edit.png')}} alt="">
                 </a>
                 <a href="{{route('clientes.destroy',[$cliente->id])}}">
                 </a>
                 <!-- Eliminar Instructor -->
                 <form action="{{route('clientes.destroy',[$cliente->id])}}" method="POST" onsubmit="return confimarEliminacion()">

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
    </table>    
@endsection