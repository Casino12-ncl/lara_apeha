<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('login_process', [AuthController::class, 'login'])->name('login_process');

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register_process', [AuthController::class, 'register'])->name('register_process');