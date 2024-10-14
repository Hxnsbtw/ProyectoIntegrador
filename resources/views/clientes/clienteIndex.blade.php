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
            </tr>
        </thead>
        <tbody class="tabla-categorias">
            @foreach ($clientes as $cliente)
            <tr>                
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apeliido}}</td>
                <td>{{$cliente->identificacion}}</td>
                <td>{{$cliente->correo}}</td>
                <td>{{$cliente->celular}}</td>
                <td>{{$cliente->peso}}</td>
                <td>{{$cliente->altura}}</td>
                <td>{{$cliente->fecha_ingreso}}</td>
                
                <td >
                    <a href="#">
                    <img src={{asset('Assets/view.png')}} alt="">
                 </a>
                 <a href="#">
                    <img src={{asset('Assets/edit.png')}} alt="">
                 </a>
                 <a href="#">
                 </a>
                 
                 <form action="#" method="POST" onsubmit="return confimarEliminacion()">

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