@extends('adminlte::page')

@section('title', 'Crud Laravel')

@section('content_header')
<h2>Crear Persona</h2>
@stop

@section('content')
    



<form action='/personas' method='POST'>
    @csrf

    <div class='mb-3'>
        <label for='nombre' class='form-label'>Nombre</label>
        <input id='nombre' name='nombre' type='text' class='form-control' tabindex='1' placeholer='Escriba el Nombre'></input>
    </div>  
    <div class='mb-3'>
        <label for='apellidos' class='form-label'>Apellidos</label>
        <input id='apellidos' name='apellidos' type='text' class='form-control' tabindex='2' placeholer='Escriba los Apellidos'></input>
    </div> 
    <div class='mb-3'>
        <label for='telefono' class='form-label'>Telefono</label>
        <input id='telefono' name='telefono' type='text' class='form-control' tabindex='3' placeholer='Escriba el numero de telefono'></input>
    </div> 
    <div class='mb-3'>
        <label for='cedula' class='form-label'>Cedula</label>
        <input id='cedula' name='cedula' type='text' class='form-control' tabindex='4' placeholer='Escriba el numero de Cedula'></input>
    </div>
    <a href='/personas' class='btn btn-secondary' tabindex='5'>Cancelar</a>
    <button type='submit' class='btn btn-success' tabindex='6'>Guardar</button>

</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop

