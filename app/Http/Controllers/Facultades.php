<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Facultad;

class Facultades extends Controller
{
    public function index(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.listado', ['facultades' => $facultades]);
    }

    public function form_registro(){
        $facultades = DB::table('facultades')->get();
        return view('facultades.form_registro');
    }

    public function registrar(Request $r){
        $facultad = new Facultad();
        $facultad->codFacultad = $r->input('cod_facultad');
        $facultad->nomFacultad = $r->input('nom_facultad');
        $facultad->save();
        return redirect()->route('listadoFac');
    }

    public function borrar($id){
        $facultad = Facultad::findOrFail($id);
        $facultad->delete();
       return redirect()->route('listadoFac');
    }
}
