<?php

use App\Http\Controllers\MédicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('médicos', [MédicoController::class, 'index']);
Route::post('médicos', [MédicoController::class, 'store']);
Route::put('médicos/{id}', [MédicoController::class, 'update']);
Route::get('médicos/{id}', [MédicoController::class, 'delete']);

