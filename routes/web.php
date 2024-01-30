<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\DoceController;
Route::controller(DoceController::class)->group(function() {
    Route::get('/doces', 'index');
    Route::get("/doces/produto/{id}", 'produto');
});

use App\Http\Controllers\SobreController;
Route::get('/sobre', [SobreController::class, 'index']);

use App\Http\Controllers\ContatoController;
Route::get('/contato', [ContatoController::class, 'index']);