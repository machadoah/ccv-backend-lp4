<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;

Route::apiResource('/vagas', VagaController::class);

// Route::delete('/vagas/{id}', [VagaController::class, 'destroy']);

// Route::put('/vagas/{id}', [VagaController::class, 'update']);

// Route::get('/vagas/{id}', [VagaController::class, 'show']);

// Route::get('/vagas', [VagaController::class, 'index']);

// Route::post('/vagas', [VagaController::class, 'store']);

