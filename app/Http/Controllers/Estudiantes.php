<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Estudiante;

class Estudiantes extends Controller
{
    public function index()
{
    $estudiantes = DB::table('estudiantes')->get();
    return view('estudiantes.listado', ['estudiantes' => $estudiantes]);
}

public function form_registro_est()
{
    $ciudades = DB::table('ciudades')->get();
    $barrios = DB::table('barrios')->get();
    $programas = DB::table('programas')->get();
    return view('estudiantes.form_registro_est', ['ciudades' => $ciudades, 'barrios' => $barrios, 'programas' => $programas]);
}

public function registrar(Request $r)
{
    $estudiante = new Estudiante();
    $estudiante->codEstudiante = $r->input('cod_estudiante');
    $estudiante->nomEstudiante = $r->input('nom_estudiante');
    $estudiante->edadEstudiante = $r->input('edad_estudiante');
    $estudiante->fechaEstudiante = $r->input('fecha_estudiante');
    $estudiante->sexEstudiante = $r->input('sex_estudiante');
    $estudiante->ciudad = $r->input('ciudad');
    $estudiante->barrio = $r->input('barrio');
    $estudiante->programa = $r->input('programa');
    $estudiante->save();
    return redirect()->route('listadoEst');
}

public function borrar($id)
{
    $estudiante = Estudiante::findOrFail($id);
    $estudiante->delete();
    return redirect()->route('listadoEst');
}

}
