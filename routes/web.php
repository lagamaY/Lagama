<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ProjetsController;
use App\Http\Controllers\ProjetDetailsController;



 
Route::get('/', [AccueilController::class, 'index']);
Route::get('/projets', [ProjetsController::class, 'index']);
Route::get('/projet-realise/', [ProjetDetailsController::class, 'index']);


