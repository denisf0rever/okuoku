<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;

Route::get('/', function () {
    return view('layout')->name('main');
});

Route::get('/home', function () {
    return view('dashboard.main');
});

Route::middleware(['guest'])->group(function () {
	
	Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
	Route::post('/login/authenticate', [\App\Http\Controllers\Auth\AuthController::class, 'authenticate'])->name('authenticate');
	Route::get('/register', [\App\Http\Controllers\Auth\RegistrationController::class, 'show'])->name('registration');
	Route::post('/register', [\App\Http\Controllers\Auth\RegistrationController::class, 'register'])->name('register.post');
	Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
	
});
	
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
		return view('dashboard.main');})->name('dashboard.main');
	
	// Шаблоны: статьи
	Route::get('dashboard/posts/add-post', function () {
		return view('dashboard.posts.add-post');
	})->name('dashboard.posts.add-post');
	
	Route::get('dashboard/posts', function () {
		return view('dashboard.posts.post-list');
	})->name('dashboard.posts');
	
	// Запросы: статьи
	Route::post('/article/create', [\App\Http\Controllers\Post\PostController::class, 'create'])->name('dashboard.posts.create-post');
});


