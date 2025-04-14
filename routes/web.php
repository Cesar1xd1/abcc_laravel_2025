<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumnos', AlumnoController::class);

Route::post('/alumnos', [AlumnoController::class, 'store'])->name('alumnos.store');

Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');




