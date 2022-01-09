<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\InformacionLaboralController;
use App\Http\Controllers\RegimenController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TiposRegimenController;
use App\Http\Controllers\TrabajadorController; 

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resources([
    'cargo'=> CargoController::class,
    'departamento' => DepartamentoController::class, 
    'informacionlaboral'=> InformacionLaboralController::class, 
    'regimen'=> RegimenController::class,
    'servicio' => ServicioController::class,
    'tiposregimen' => TiposRegimenController::class,
    'trabajador'=> TrabajadorController::class,
]);

Route::get('informacion/nuevo/{id}',[InformacionLaboralController::class, 'nuevo']);


require __DIR__.'/auth.php';
