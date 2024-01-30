<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\SobreController;
Route::get('/', [SobreController::class, 'index']);

use App\Http\Controllers\ContatoController;
Route::get('/', [ContatoController::class, 'index']);