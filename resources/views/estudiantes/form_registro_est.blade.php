@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Estudiantes</h1>
@stop

@section('content')
    <p>Listado de Registros</p>
    <form action="{{ url('estudiantes/registrar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_estudiante" class="form-label">Código</label>
            <input type="text" class="form-control" name="cod_estudiante" id="cod_estudiante" placeholder="Código del Estudiante">
        </div>
        <div class="mb-3">
            <label for="nom_estudiante" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nom_estudiante" id="nom_estudiante" placeholder="Nombre del Estudiante">
        </div>
        <div class="mb-3">
            <label for="edad_estudiante" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad_estudiante" id="edad_estudiante" placeholder="Edad del Estudiante">
        </div>
        <div class="mb-3">
            <label for="fecha_estudiante" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha_estudiante" id="fecha_estudiante">
        </div>
        <div class="mb-3">
            <label for="sex_estudiante" class="form-label">Sexo</label>
            <input type="text" class="form-control" name="sex_estudiante" id="sex_estudiante" placeholder="Sexo del Estudiante">
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <select class="form-select" name="ciudad" id="ciudad">
                @foreach ($ciudades as $ciudad)
                    <option value="{{ $ciudad->codCiudad }}">{{ $ciudad->nomCiudad }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="barrio" class="form-label">Barrio</label>
            <select class="form-select" name="barrio" id="barrio">
                @foreach ($barrios as $barrio)
                    <option value="{{ $barrio->codBarrio }}">{{ $barrio->nomBarrio }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="programa" class="form-label">Programa</label>
            <select class="form-select" name="programa" id="programa">
                @foreach ($programas as $programa)
                    <option value="{{ $programa->codPrograma }}">{{ $programa->nomPrograma }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
