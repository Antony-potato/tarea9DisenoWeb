<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('inicio');
Route::view('/fotos', 'photos')->name('fotos');
Route::view('/contacto', 'contact')->name('contacto');
