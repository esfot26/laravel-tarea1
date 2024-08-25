<?php

use App\Http\Controllers\transporteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crearTransporte',[transporteController::class,'crearTransporte']);
Route::get('/verTransportes',[transporteController::class,'verTransportes']);
Route::get('/mostrarTransporte/{id}',[transporteController::class,'mostrarTransporte']);
Route::get('/eliminarTransporte/{id}',[transporteController::class,'eliminarTransporte']);
Route::get('/editarTransporte',[transporteController::class,'editarTransporte']);
