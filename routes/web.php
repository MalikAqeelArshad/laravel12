<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');

// Route::resource('/blogs', BlogController::class);
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blogs.create');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.show');

Route::middleware(['auth'])->group(function () {
    // Route::post('/blogs', [BlogController::class, 'store']);
    // Route::get('/blogs/{blog}', [BlogController::class, 'show']);
    // Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);
    // Route::put('/blogs/{blog}', [BlogController::class, 'update']);
    // Route::delete('/blogs/{blog}', [BlogController::class, 'destroy']);
    Route::resource('/blogs', BlogController::class)->except(['index', 'create', 'show']);
});

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'signup']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'signin']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::delete('/logout', [AuthController::class, 'logout'])->middleware('auth');
