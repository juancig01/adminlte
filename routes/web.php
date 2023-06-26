<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [HomeController::class, 'index']);

Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::get('/facultades/borrar/{id}', [Facultades::class, 'borrar'])->name('eliminaFac');
Route::POST('/facultades/registrar', [Facultades::class, 'registrar']);


Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoPro');
Route::get('/programas/registrar', [Programas::class, 'form_registro_pro']);
Route::get('/programas/borrar/{id}', [Programas::class, 'borrar'])->name('eliminaPro');
Route::POST('/programas/registrar', [Programas::class, 'registrar']);

Route::get('/estudiantes/listado', [Estudiantes::class, 'index'])->name('listadoEst');
Route::get('/estudiantes/registrar', [Estudiantes::class, 'form_registro_est']);
Route::get('/estudiantes/borrar/{id}', [Estudiantes::class, 'borrar'])->name('eliminaEst');
Route::POST('/estudiantes/registrar', [Estudiantes::class, 'registrar']);

Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoProf');
Route::get('/profesores/registrar', [Profesores::class, 'form_registro_prof']);
Route::get('/profesores/borrar/{id}', [Profesores::class, 'borrar'])->name('eliminaProf');
Route::POST('/profesores/registrar', [Profesores::class, 'registrar']);


Route::get('/regnotas/listado', [Calificaciones::class, 'index']);









