<?php

use App\Http\Controllers\API\PatientController;
use Illuminate\Support\Facades\Route;

const PATIENTBYID = '/patients/{id}';

Route::middleware(['check.apikey'])
    ->name('api.')
    ->group(function () {
        Route::post('/patients', [PatientController::class, 'create'])->name('patients.create');
        Route::put(PATIENTBYID, [PatientController::class, 'update'])->name('patients.update');
        Route::delete(PATIENTBYID, [PatientController::class, 'delete'])->name('patients.delete');
        Route::get('/patients', [PatientController::class, 'get'])->name('patients.get');
        Route::get(PATIENTBYID, [PatientController::class, 'getById'])->name('patients.getById');
    });
