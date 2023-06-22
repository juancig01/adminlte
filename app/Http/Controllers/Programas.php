<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Programa;

class Programas extends Controller
{
    //
    public function index(){
        $programas = DB::table('programas')->get();
        return view('programas.listado', ['programas' => $programas]);
    }

    public function form_registro_pro(){
        $programas = DB::table('programas')->get();
        return view('programas.form_registro_pro');
    }

    public function registrar(Request $r){
        $programa = new Programa();
        $programa->codPrograma = $r->input('cod_programa');
        $programa->nomPrograma = $r->input('nom_programa');
        $programa->facultad = $r->input('facultad');
        $programa->save();
        return redirect()->route('listadoPro');
    }

    public function borrar($id){
        $programa = Programa::findOrFail($id);
        $programa->delete();
       return redirect()->route('listadoPro');
    }
}
