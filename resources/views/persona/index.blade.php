@extends('adminlte::page')

@section('title', 'Crud Laravel')

@section('content_header')
    <h1>Lista de Personas</h1>
@stop

@section('content')
    


<a href='personas/create' class='btn btn-primary fw-bolder mb-4 mt-2'>Crear Persona</a>
<table id='personas' class='table table-dark table-striped mt-4 text-center table-bordered shadow-lg'>
    <thead>
        <tr>
            <th scope='col'>Nombre</th>
            <th scope='col'>Apellidos</th>
            <th scope='col'>Telefono</th>
            <th scope='col'>Cedula</th>
            <th scope='col'>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $persona)
        <tr>
            <td>{{$persona->nombre}}</td>
            <td>{{$persona->apellidos}}</td>
            <td>{{$persona->telefono}}</td>
            <td>{{$persona->cedula}}</td>
            <td>
                <form action="{{ route ('personas.destroy',$persona->id)}}" method='POST'>
                    <a href='/personas/{{$persona->id}}/edit' class='btn btn-info fw-bolder text-white'><i class="bi bi-pencil"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-danger fw-bolder'><i class="bi bi-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>


@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
 
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#personas').DataTable({
            "lengthMenu":[[5,10,50, -1],[5,10,50, 'All']]
        });
    } );
    </script>
@stop

