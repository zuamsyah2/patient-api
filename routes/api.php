<?php

use App\Http\Controllers\API\PatientController;
use Illuminate\Support\Facades\Route;

Route::middleware(['check.apikey'])
    ->name('api.')
    ->group(function () {
        Route::post('/users', [PatientController::class, 'create'])->name('users.create');
        Route::put('/users/{id}', [PatientController::class, 'update'])->name('users.update');
        Route::delete('/users/{id}', [PatientController::class, 'delete'])->name('users.delete');
        Route::get('/users', [PatientController::class, 'get'])->name('users.get');
        Route::get('/users/{id}', [PatientController::class, 'getById'])->name('users.getById');
    });
