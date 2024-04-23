<?php

use App\Http\Controllers\TareasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('paginas.index');
})->name('tareas');

Route::post('/tareas', [TareasController::class,'store'])->name('tareas');