@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Programas</h1>


@stop

@section('content')
<p>Listado de Programas</p>
    <a class="btn btn-success" href="/programas/registrar/">Adicionar</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Facultad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
     @php
        $contador = 1;
    @endphp
    @foreach ($programas as $f)
    <tr>
      <th scope="row">{{$contador}}</th>
      <td>{{$f->codPrograma}}</td>
      <td>{{$f->nomPrograma}}</td>
      <td>{{$f->facultad}}</td>
      <td>
        <a class="btn btn-success">Editar</a>
        <a class="btn btn-danger" href="{{route('eliminaPro', $f->codPrograma)}}">Eliminar</a>
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
