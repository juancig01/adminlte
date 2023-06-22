@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro</h1>


@stop

@section('content')
    <p>Listado de Registros</p>
    <form action="{{url('facultades/registrar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="cod_facultad" id="cod_facultad" placeholder="cod. Facultad">
            </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nom_facultad" id="nom_facultad" placeholder="Nombre Facultad">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop