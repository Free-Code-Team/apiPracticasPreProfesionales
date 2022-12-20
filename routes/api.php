<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\SolicitudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('solicitudes', SolicitudController::class);
Route::apiResource('empresas', EmpresaController::class);
Route::apiResource('personas', PersonaController::class);
Route::get('/personas/ver/{id}', [PersonaController::class, 'obtenerPersonaPorUid']);
Route::get('/estudiantes/ver/{id}', [EstudianteController::class, 'obtenerEstudiantePorId']);
Route::apiResource('estudiantes', EstudianteController::class);