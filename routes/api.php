<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProgramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [AuthenticatedSessionController::class, 'store']);

Route::middleware(['auth:sanctum'])->group(function() {
    Route::get('/program', [ProgramController::class, 'index'])->middleware('role:super_admin|admin|operator|perangkat_daerah');
    Route::post('/program', [ProgramController::class, 'store'])->middleware('role:super_admin');
    Route::put('/program/{post}', [ProgramController::class, 'update'])->middleware('role:super_admin');
    Route::delete('/program/{post}', [ProgramController::class, 'destroy'])->middleware('role:super_admin');
    Route::get('/program/{post}', [ProgramController::class, 'show'])->middleware('role:super_admin|admin|operator|perangkat_daerah');
});