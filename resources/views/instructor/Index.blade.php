@extends('layouts.plantilla')

@section('contenido')

<section class="container-tabla">
    <h2 class="titulo-tabla">Instructores</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>identificacion</th>
                <th>Correo Electrónico</th>
                <th>Teléfono</th>
                <th>Especialidad</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class="tabla-instructores">
            @foreach ($instructores as $instructor)
            <tr>                
                <td>{{ $instructor->id }}</td>
                <td>{{ $instructor->nombre }}</td>
                <td>{{ $instructor->apellido }}</td>
                <td>{{ $instructor->Identificacion }}</td>
                <td>{{ $instructor->correo }}</td>  
                <td>{{ $instructor->celular }}</td>
                <td>{{ $instructor->Especializacion }}</td>
                
                <td>
                    <!-- Ver Instructor -->
                    <a href="{{ route('instructores.show', [$instructor->id]) }}">
                        <img src="{{ asset('Assets/view.png') }}" alt="Ver">
                    </a>
                    <!-- Editar Instructor -->
                    <a href="{{ route('instructores.edit', [$instructor->id]) }}">
                        <img src="{{ asset('Assets/edit.png') }}" alt="Editar">
                    </a>
                    <a href="{{route('instructores.destroy',[$instructor->id])}}">
                    </a>
                    <!-- Eliminar Instructor -->
                    <form action="{{ route('instructores.destroy', [$instructor->id]) }}" method="POST" onsubmit="return confirmarEliminacion()">
                        @csrf
                        @method('DELETE')
                        <input type="image" src="{{ asset('Assets/delete.png') }}" alt="Eliminar">
                    </form>
                    <script>
                        function confirmarEliminacion() {
                            return confirm('¿Seguro deseas eliminar este instructor?');
                        }
                    </script>
                </td>
            </tr>
            @endforeach           
        </tbody>
    </table>
</section>
@endsection
