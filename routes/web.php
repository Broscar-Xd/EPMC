<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');


Route::view('nosotros', 'nosotros')->name('nosotros');   
Route::view('turnos', 'turnos')->name('turnos');
Route::view('consultas', 'consultas')->name('consultas');
Route::view('requisitos', 'requisitos')->name('requisitos');
Route::view('formularios', 'formularios')->name('formularios');
Route::view('salcedo', 'salcedo')->name('salcedo');
Route::view('quienes-somos','quienes-somos')->name('quienes-somos');
Route::view('calendarioMatriculacion','calendarioMatriculacion')->name('calendarioMatriculacion');
Route::view('lotaip', 'lotaip')->name('lotaip');
Route::view('informate', 'informate')->name('informate');
Route::view('Administrativo', 'Administrativo')->name('Administrativo');
Route::view('Directivo', 'Directivo')->name('Directivo');
Route::view('Publicaciones', 'Publicaciones')->name('Publicaciones');Route::view('sucursal.Salcedo', 'sucursal.Salcedo')->name('sucursal.Salcedo');
Route::view('sucursal.Lamana', 'sucursal.Lamana')->name('sucursal.Lamana');
Route::view('sucursal.Pujili', 'sucursal.Pujili')->name('sucursal.Pujili');
Route::view('reimprimirTurno', 'reimprimirTurno')->name('reimprimirTurno');