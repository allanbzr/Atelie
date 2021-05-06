<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\participanteController;
use App\Http\Controllers\empresaController;

Route::get('participante', [ParticipanteController::class, 'index']);
Route::get('empresa', [EmpresaController::class, 'index']);

Route::get('participante/{id}', [ParticipanteController::class, 'show']);
Route::get('empresa/{id}', [EmpresaController::class, 'show']);

Route::post('participante', [ParticipanteController::class, 'store']);
Route::post('empresa', [EmpresaController::class, 'store']);

Route::put('participante/{id}', [ParticipanteController::class, 'update']);
Route::put('empresa/{id}', [EmpresaController::class, 'update']);

Route::delete('participante/{id}', [ParticipanteController::class, 'destroy']);
Route::delete('empresa/{id}', [EmpresaController::class, 'destroy']);
