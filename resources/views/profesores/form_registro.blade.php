@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Profesores</h1>
@stop

@section('content')
    <p>Listado de Registros</p>
    <form action="{{ url('profesores/registrar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_profesor" class="form-label">Código</label>
            <input type="text" class="form-control" name="cod_profesor" id="cod_profesor" placeholder="Código de Profesor">
        </div>
        <div class="mb-3">
            <label for="nom_profesor" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nom_profesor" id="nom_profesor" placeholder="Nombre de Profesor">
        </div>
        <div class="mb-3">
            <label for="cat_profesor" class="form-label">Categoría</label>
            <input type="text" class="form-control" name="cat_profesor" id="cat_profesor" placeholder="Categoría de Profesor">
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
