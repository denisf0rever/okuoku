<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard/posts', ['PostController::class', 'index'])->name('dashboard.posts.post-list');

Route::get('dashboard/posts/add-post', function () {
	return view('dashboard.posts.add-post');
});