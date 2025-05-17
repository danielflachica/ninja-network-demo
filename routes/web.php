<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', [NinjaController::class, 'index']);
Route::get('/ninjas/create', [NinjaController::class, 'create']);
Route::get('/ninjas/{id}', [NinjaController::class, 'show']);
