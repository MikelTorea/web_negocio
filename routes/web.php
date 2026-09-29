<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'home'])
    ->name('home');

Route::get('/destinos', [WebController::class, 'destinos'])
    ->name('destinos');

Route::get('/contacto', [WebController::class, 'contacto'])
    ->name('contacto');