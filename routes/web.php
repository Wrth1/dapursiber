<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;


Route::get('/', function(){
    return redirect()->route('login');
});

Route::get('/test', function(){
    return view('test');
})->name('test');

Route::get('/register', [AuthController::class, 'showRegistForm'])->middleware('guest')->name('register');
Route::post('/register', [AuthController::class, 'register'])->middleware('guest');

Route::get('/login', [AuthController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('guest');

Route::get('/logout', [AuthController::class, 'logout']);


// Route::middleware('auth')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'showIndex'])->middleware('auth')->name('dashboard');
    Route::get('/chat', [ChatController::class, 'showChat'])->name('chat');
    Route::get('/product', [ProductController::class, 'showProductPage'])->name('product');
// });

// Route::middleware(['auth', 'role_id:1'])->group(function() {
    Route::get('/consultant', [ConsultantController::class, 'showConsultantPage'])->name('consultant');
// });

// Route::middleware(['auth', 'role_id:2'])->group(function() {
    Route::get('/consultantRequest', [ConsultantController::class, "showConsultationRequest"])->name('consultant');
// });

// Route::middleware(['auth', 'role_id:3'])->group(function() {
    Route::get('/user', [UserController::class, 'viewUsers'])->name('user');
    Route::post('/user', [UserController::class, 'addUsers'])->name('user');

    Route::post('/product', [ProductController::class, 'addProduct'])->name('product');
// });


?>
