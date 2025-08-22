<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NosotrosController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\HemerotecaController;
use App\Http\Controllers\GaleriaController;
use App\Http\Controllers\CinetecaController;
use App\Http\Controllers\PaginasEstaticasController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('home.inicio');
});
*/

Route::get('/', [HomeController::class, 'index'])->name('home.inicio');

Route::get('/nosotros', [NosotrosController::class, 'index'])->name('nosotros.us');

Route::get('/biblioteca', [BibliotecaController::class, 'index'])->name('biblioteca.biblioteca');

Route::get('/hemeroteca', [HemerotecaController::class, 'index'])->name('hemeroteca.hemeroteca');

Route::get('/galeria', [GaleriaController::class, 'index'])->name('galeria.galeria');

Route::get('/cineteca', [CinetecaController::class, 'index'])->name('cineteca.cineteca');

Route::get('/pasajesdimensionales', [PaginasEstaticasController::class, 'pasajesDimensionales'])->name('paginasEstaticas.pasajesmetadimensionales');