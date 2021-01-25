<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbclassController;

Route::get('/', [DbclassController::class, 'index']);
Route::get('/add', [DbclassController::class, 'add']);
Route::post('/add', [DbclassController::class, 'create']);
Route::get('/edit/{id}', [DbclassController::class, 'edit']);
Route::post('/edit/{id}', [DbclassController::class, 'update']);
Route::get('/delete/{id}', [DbclassController::class, 'delete']);
Route::post('/delete/{id}', [DbclassController::class, 'remove']);