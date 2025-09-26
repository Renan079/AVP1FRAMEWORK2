<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExercicioModelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get ('/exercicios', [ExercicioModelController::class, 'index'])->name('exercicios.index');
    Route::get('/exercicios/create', [ExercicioModelController::class, 'create'])->name('exercicios.create');
    Route::post('/exercicios', [ExercicioModelController::class, 'store'])->name('exercicios.store');
});

require __DIR__.'/auth.php';