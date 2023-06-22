<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Profesores extends Controller
{
    //
    public function index(){
        return view('profesores.listado');
    }
}
