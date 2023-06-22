@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro</h1>


@stop

@section('content')
    <p>Listado de Registros</p>
    <form action="{{url('programas/registrar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Codigo</label>
            <input type="text" class="form-control" name="cod_programa" id="cod_programa" placeholder="cod. Progrma">
            </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nom_programa" id="nom_programa" placeholder="Nombre Progrma">
        </div>
        <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Facultad</label>
            <input type="text" class="form-control" name="facultad" id="facultad" placeholder="Facultad">
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