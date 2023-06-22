@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Estudiantes</h1>


@stop

@section('content')
    <p>Listado de Estudiantes</p>
    <a class="btn btn-success" href="/estudiantes/registrar/">Adicionar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Fecha</th>
      <th scope="col">Sexo</th>
      <th scope="col">Ciudad</th>
      <th scope="col">Barrio</th>
      P<th scope="col">Programa</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
     @php
        $contador = 1;
    @endphp
    @foreach ($estudiantes as $f)
    <tr>
      <th scope="row">{{$contador}}</th>
      <td>{{$f->codEstudiante}}</td>
      <td>{{$f->nomEstudiante}}</td>
      <td>{{$f->edadEstudiante}}</td>
      <td>{{$f->fechaEstudiante}}</td>
      <td>{{$f->sexEstudiante}}</td>
      <td>{{$f->ciudad}}</td>
      <td>{{$f->programa}}</td>

      <td>
        <a class="btn btn-success">Editar</a>
        <a class="btn btn-danger" href="{{route('eliminaEst', $f->codEstudiante)}}">Eliminar</a>
      </td>
    </tr>
    @php
        $contador++;
    @endphp
    @endforeach
  </tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
