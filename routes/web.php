<?php

use App\Http\Controllers\BatimentController;
use Illuminate\Support\Facades\Route;

Route::get('/batiment', [BatimentController::class, 'batiment'])->name(batiment);
