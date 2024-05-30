<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use BeyondCode\LaravelWebSockets\Facades\WebSocketRouter;


Route::get('/', function () {
    return view('layout');
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
	
	// Статьи
	Route::get('/article/{id}', [\App\Http\Controllers\Post\PostController::class, 'show'])->name('dashboard.posts.item');
	
	// Профиль
	Route::get('/profile/{id}', [\App\Http\Controllers\User\UserController::class, 'show'])->name('user.profile.item');
	
	Route::get('/chat', [\App\Http\Controllers\Chat\ChatController::class, 'endPoint']);
	
	
	//WebSocketRouter::webSocket('/socket.io', \App\WebSocketHandler::class);
});
	
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', function () {
		return view('dashboard.main');})->name('dashboard.main');
	
	// Шаблоны: добавление статьи
	Route::get('dashboard/posts/add-post', function () {
		return view('dashboard.posts.add-post');
	})->name('dashboard.posts.add-post');
	
	Route::get('dashboard/posts', function () {
		return view('dashboard.posts.post-list');
	})->name('dashboard.posts');
	
	// Запросы: статьи
	Route::post('/article/create', [\App\Http\Controllers\Post\PostController::class, 'create'])->name('dashboard.posts.create-post');
	
	// Чат: оператор
	Route::get('/dashboard/chat', [\App\Http\Controllers\Chat\ChatController::class, 'index'])->name('dashboard.chat');
	
	
	Route::get('/article/{id}', [\App\Http\Controllers\Post\PostController::class, 'show'])->name('dashboard.posts.item');
});


