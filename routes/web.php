<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// Landing page with form
Route::get('/', [FormController::class, 'showLanding'])->name('landing');

// Form submission
Route::post('/submit', [FormController::class, 'submitForm'])->name('form.submit');

// Confirmation page
Route::get('/confirmation', [FormController::class, 'confirmation'])->name('form.confirmation');
