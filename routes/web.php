<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\ModeloController;
use App\Http\Controllers\CorController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VeiculoController::class, 'index'])->name('home');

Route::get('/detalhes/{id}', [VeiculoController::class, 'detail']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cadastros/veiculos', [VeiculoController::class, 'list']);
    Route::get('/cadastros/veiculos/editar/{id}', [VeiculoController::class, 'edit']);
    Route::post('/cadastros/veiculos/editar/{id}', [VeiculoController::class, 'update']);
    Route::get('/cadastros/veiculos/cadastrar', [VeiculoController::class, 'fill']);
    Route::post('/cadastros/veiculos', [VeiculoController::class, 'store']);
    Route::delete('/cadastros/veiculos/{id}', [VeiculoController::class, 'destroy']);

    Route::get('/cadastros/marcas', [MarcaController::class, 'index']);
    Route::get('/cadastros/marcas/editar/{id}', [MarcaController::class, 'edit']);
    Route::post('/cadastros/marcas/editar/{id}', [MarcaController::class, 'update']);
    Route::get('/cadastros/marcas/cadastrar', [MarcaController::class, 'fill']);
    Route::post('/cadastros/marcas', [MarcaController::class, 'store']);
    Route::delete('/cadastros/marcas/{id}', [MarcaController::class, 'destroy']);

    Route::get('/cadastros/modelos', [ModeloController::class, 'index']);
    Route::get('/cadastros/modelos/editar/{id}', [ModeloController::class, 'edit']);
    Route::post('/cadastros/modelos/editar/{id}', [ModeloController::class, 'update']);
    Route::get('/cadastros/modelos/cadastrar', [ModeloController::class, 'fill']);
    Route::post('/cadastros/modelos', [ModeloController::class, 'store']);
    Route::delete('/cadastros/modelos/{id}', [ModeloController::class, 'destroy']);

    Route::get('/cadastros/cores', [CorController::class, 'index']);
    Route::get('/cadastros/cores/editar/{id}', [CorController::class, 'edit']);
    Route::post('/cadastros/cores/editar/{id}', [CorController::class, 'update']);
    Route::get('/cadastros/cores/cadastrar', [CorController::class, 'fill']);
    Route::post('/cadastros/cores', [CorController::class, 'store']);
    Route::delete('/cadastros/cores/{id}', [CorController::class, 'destroy']);
});

require __DIR__.'/auth.php';
