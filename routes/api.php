<?php

use App\Http\Controllers\SolicitudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('solicitudes', SolicitudController::class);