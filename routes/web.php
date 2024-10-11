<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


use App\Http\Controllers\LegalCaseController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\TaskController;

Route::resource('legal-cases', LegalCaseController::class);
Route::resource('clients', ClientController::class);
Route::resource('tasks', TaskController::class);
