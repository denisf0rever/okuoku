<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\Post\CatergoryController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('dashboard.main');
});
	Route::get('/login', [AuthController::class, 'index'])->name('login');
	Route::post('/login/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
	Route::get('/register', [RegistrationController::class, 'show'])->name('registration');
	Route::post('/register', [RegistrationController::class, 'register'])->name('register.post');
	Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
	
	// Статьи
	Route::get('/article/{id}', [PostController::class, 'show'])->name('articles.item');
	Route::resource('/categories', CatergoryController::class);
	
	// Профиль
	Route::get('/profile/{id}', [\App\Http\Controllers\User\UserController::class, 'show'])->name('user.profile.item');
	
	// Чат
	Route::post('/set-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'setCookie'])->name('set-cookie');
	Route::get('/get-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'getCookie'])->name('get-cookie');
	Route::post('/delete-cookie', [\App\Http\Controllers\User\UserCookiesController::class, 'removeCookie'])->name('delete-cookie');
	
Route::middleware(['guest'])->group(function () {
	Route::get('/chat', [\App\Http\Controllers\Chat\ChatController::class, 'endPoint']);
});
	
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
		return view('dashboard.main');})->name('dashboard.main');
	
	// Статьи
	Route::get('/dashboard/article', [\App\Http\Controllers\Post\PostController::class, 'index'])->name('dashboard.article');
	Route::get('/dashboard/article/{id}/edit', [\App\Http\Controllers\Post\PostController::class, 'edit'])->name('dashboard.article.edit');
	Route::post('/dashboard/article/{id}', [\App\Http\Controllers\Post\PostController::class, 'update'])->name('dashboard.article.update');
	Route::get('/dashboard/article/add-article', function () {return view('dashboard.articles.add-article');})->name('dashboard.article.add-article');
	Route::post('/article/create', [\App\Http\Controllers\Post\PostController::class, 'create'])->name('dashboard.article.create-article');
	Route::get('/article/delete/{id}', [\App\Http\Controllers\Post\PostController::class, 'destroy'])->name('dashboard.article.destroy');
	
	// Статьи: категории
	Route::get('/dashboard/categories', [CatergoryController::class, 'index'])->name('dashboard.categories');
	Route::get('/dashboard/article/add-category', function () {return view('dashboard.articles.add-category');})->name('dashboard.article.add-category');
	Route::post('/categories/create', [CatergoryController::class, 'create'])->name('dashboard.article.create-category');
	

	
	// Чат: оператор
	Route::get('/dashboard/chat', [\App\Http\Controllers\Chat\ChatController::class, 'index'])->name('dashboard.chat');
	

});


