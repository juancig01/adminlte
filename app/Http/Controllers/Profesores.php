<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Programas extends Controller
{
    // ...

    public function index(){
        $profesores = DB::table('profesores')->get();
        return view('profesores.listado', ['profesores' => $profesores]);
    }

    public function form_registro_pro(){
        return view('profesores.form_registro_prof');
    }

    public function registrar(Request $r){
        $profesor = new Profesor();
        $profesor->codProfesor = $r->input('cod_profesor');
        $profesor->nomProfesor = $r->input('nom_profesor');
        $profesor->catProfesor = $r->input('cat_profesor');
        $profesor->save();
        return redirect()->route('listadoProf');
    }

    public function borrar($id){
        $profesor = Profesor::findOrFail($id);
        $profesor->delete();
        return redirect()->route('listadoProf');
    }
}

