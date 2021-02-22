@extends('adminlte::page')

@section('title', 'Crud Laravel')

@section('content_header')
<h2>Editar Persona</h2>
@stop

@section('content')
    
<form action='/personas/{{$persona->id}}' method='POST'>
    @csrf
    @method('PUT')
    <div> 
        <div class='mb-3'>
            <label for="nombre" class='form-label'>
                Nombres
            </label>
            <input type="text" name='nombre' id='nombre' class='form-control' tabindex='1' value='{{$persona->nombre}}'> </input>
        </div>  
        <div class='mb-3'>
            <label for="apellidos" class='form-label'> 
                Apellidos
            </label>
            <input type="text" name='apellidos' id='apellidos' class='form-control' tabindex='2' value='{{$persona->apellidos}}'> </input>
        </div>  
        <div class='mb-3'>
            <label for="telefono" class='form-label'>
                Telefono
            </label>
            <input type="text" name='telefono' id='telefono' class='form-control' tabindex='3' value='{{$persona->telefono}}'> </input>
        </div>  
        <div class='mb-3'>
            <label for="cedula" class='form-label'>
                Cedula
            </label>
            <input type="text" name='cedula' id='cedula' class='form-control' tabindex='4' value='{{$persona->cedula}}'> </input>
        </div>  
        <div class='mb-3'>
            <a href='/personas' class='btn btn-secondary' tabindex='5'>Cancelar</a>
            <button type='submit' class='btn btn-success' tabindex='6'>
                Guardar
            </button>
        </div>  
    </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
   
@stop



