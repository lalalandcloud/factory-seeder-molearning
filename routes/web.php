<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\TypeFormationController;
use Illuminate\Support\Facades\Route;

Route::get('/batiment', [BatimentController::class, 'index'])->name('batiment');
Route::get('/formation', [FormationController::class, 'index'])->name('formation');
Route::get('/typeformation', [TypeFormationController::class, 'index'])->name('typeformation');
Route::get('/eleves', [EleveController::class, 'index'])->name('eleves');
Route::get('/eleves/create', [EleveController::class, 'create'])->name('eleves.create');
Route::post('/eleves', [EleveController::class, 'store'])->name('eleves.store');
Route::get('/eleves/{eleves}/edit', [EleveController::class, 'edit'])->name('eleves.edit');
Route::put('/eleves/{eleves}', [EleveController::class, 'update'])->name('eleves.update');
Route::delete('/eleves/{eleves}', [EleveController::class, 'destroy'])->name('eleves.destroy');

// Route::resource('eleves', EleveController::class);