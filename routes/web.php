<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('register');
    return redirect()->route('register');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/chat', function () {
    return view('chat');
});

?>
