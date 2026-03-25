<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('personas',App\Http\Controllers\PersonaController::class);
Route::resource('familiar',App\Http\Controllers\FamiliarController::class);
