<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\CorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');


Route::get('/cadastros/veiculos', function () {
    return view('cadastros.veiculos');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cadastros/marcas', [MarcaController::class, 'index']);
    Route::get('/cadastros/marcas/cadastrar', [MarcaController::class, 'fill']);
    Route::post('/cadastros/marcas', [MarcaController::class, 'store']);
    Route::delete('/cadastros/marcas/{id}', [MarcaController::class, 'destroy']);

    Route::get('/cadastros/modelos', [ModeloController::class, 'index']);
    Route::get('/cadastros/modelos/cadastrar', [ModeloController::class, 'fill']);
    Route::post('/cadastros/modelos', [ModeloController::class, 'store']);
    Route::delete('/cadastros/modelos/{id}', [ModeloController::class, 'destroy']);

    Route::get('/cadastros/cores', [CorController::class, 'index']);
    Route::get('/cadastros/cores/cadastrar', [CorController::class, 'fill']);
    Route::post('/cadastros/cores', [CorController::class, 'store']);
    Route::delete('/cadastros/cores/{id}', [CorController::class, 'destroy']);
});

require __DIR__.'/auth.php';
