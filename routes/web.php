<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function(){
    return redirect()->route('login');
});

Route::get('/register', [AuthController::class, 'showRegistForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');


Route::get('/dashboard', [DashboardController::class, 'showIndex'])->middleware('auth')->name('dashboard');

Route::get('/logout', [AuthController::class, 'logout']);

?>
