<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApartamentoController;
use App\Http\Controllers\DuenioController;
use App\Http\Controllers\PropiedadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/apartamentos', [ApartamentoController::class, 'index'])->name('apartamentos.inicio');

Route::get('/apartamentos/{area}/{piso?}', [ApartamentoController::class, 'obtenerPrecio'])->name('apartamentos.precio');

Route::get('/duenios/mostrar', [DuenioController::class, 'mostrarDuenios'])->name('duenio.mostrar');

Route::get('/duenios/crear', [DuenioController::class, 'create'])->name('duenio.create');

Route::post('/duenios/guardar', [DuenioController::class, 'store'])->name('duenio.store');

Route::get('/duenios/delete/{id}', [DuenioController::class, 'delete'])->name('duenio.delete');

Route::get('/duenios/destroy/{id}', [DuenioController::class, 'destroy'])->name('duenio.destroy');

Route::get('/duenios/edit/{id}', [DuenioController::class, 'edit'])->name('duenio.edit');

Route::put('/duenios/update/{id}', [DuenioController::class, 'update'])->name('duenio.update');

Route::get('/propiedades/duenio/{id}', [PropiedadController::class, 'mostrarPropiedades'])->name('propiedad.mostrar');

Route::get('/propiedades/{id}/duenio', [PropiedadController::class, 'mostrarDuenio'])->name('propiedad.duenio');




