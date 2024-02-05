<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortefolioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PortefolioController::class, 'index']);
Route::get('/resume', [PortefolioController::class, 'resume']);
Route::get('/projects', [PortefolioController::class, 'projects']);
Route::get('/contact', [PortefolioController::class, 'contact']);
Route::post('/contact', [PortefolioController::class, 'contactForm']);
