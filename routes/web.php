<?php

use App\Http\Controllers\TareasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('paginas.index');
})->name('index');

Route::get('/tareas', [TareasController::class,'index'])->name('tareas');

Route::post('/tareas', [TareasController::class,'store'])->name('tareas');

Route::get('/tareas/{id}', [TareasController::class,'show'])->name('tareas-edit');

Route::patch('/tareas', [TareasController::class,'update'])->name('tareas-update');

Route::delete('/tareas', [TareasController::class,'destroy'])->name('tareas-destroy');