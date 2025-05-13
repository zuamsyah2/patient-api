<?php

use App\Http\Controllers\API\PatientController;
use Illuminate\Support\Facades\Route;

Route::middleware(['check.apikey'])
    ->name('api.')
    ->group(function () {
        Route::post('/patients', [PatientController::class, 'create'])->name('patients.create');
        Route::put('/patients/{id}', [PatientController::class, 'update'])->name('patients.update');
        Route::delete('/patients/{id}', [PatientController::class, 'delete'])->name('patients.delete');
        Route::get('/patients', [PatientController::class, 'get'])->name('patients.get');
        Route::get('/patients/{id}', [PatientController::class, 'getById'])->name('patients.getById');
    });
