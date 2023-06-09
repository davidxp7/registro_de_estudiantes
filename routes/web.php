<?php

use App\Http\Controllers\Autenticado\AutenticadoController;
use App\Http\Controllers\Autenticado\CarreraController;
use App\Http\Controllers\Autenticado\EstudianteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[PublicController::class,'index'])->name('public');
Route::get('/public/carrera/{id}',[PublicController::class,'show'])->name('public.carrera');
Route::get('/public/registro/{id}',[PublicController::class,'create'])->name('public.registro');
Route::get('/registro/estudiante',[PublicController::class,'store'])->name('registro.estudiante');
Route::get('/mensaje',[PublicController::class,'mensaje'])->name('registro.mensaje');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard',[AutenticadoController::class, 'index'])->name('dashboard');

    Route::resource('/carreras',CarreraController::class);
    Route::resource('/estudiantes',EstudianteController::class);


});

require __DIR__.'/auth.php';
