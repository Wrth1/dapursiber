<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;



Route::get('/', function () {
    return view('universal.landing');
});

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/register', [AuthController::class, 'showRegistForm'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout']);


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'showIndex'])->name('dashboard');
    Route::resource('/chat', ChatController::class)
        ->name('index', 'chat')
        ->name('show', 'chat.show');

    Route::resource('/product', ProductController::class)
        ->name('index', 'product');
});

Route::middleware(['role_id:1'])->group(function () {
    Route::get('/consultant', [ConsultantController::class, 'showConsultantPage'])->name('consultant');
    Route::post('/book_consultation', [ConsultantController::class, 'bookConsultation']);
});

Route::middleware(['role_id:2'])->group(function () {
    Route::get('/consultation_request', [ConsultantController::class, "showConsultationRequest"])->name('consultation_request');
    Route::post('/consultation_request', [ConsultantController::class, "acceptConsultation"]);
});

Route::middleware(['role_id:3'])->group(function () {
    Route::resource('/user', UserController::class)
        ->name('index', 'userlist');
    // Route::post('/product', [ProductController::class, 'addProduct'])->name('product');
});
