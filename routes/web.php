<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NinjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');
Route::get('/ninjas/{ninja}', [NinjaController::class, 'show'])->name('ninjas.show');
Route::post('/ninjas', [NinjaController::class, 'store'])->name('ninjas.store');
Route::delete('/ninjas/{ninja}', [NinjaController::class, 'destroy'])->name('ninjas.destroy');