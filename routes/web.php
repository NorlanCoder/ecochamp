<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AlertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/home', [HomeController::class, "index"]);

Route::get('/register', [RegisterController::class, 'create'])->name('register.create');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('forgot.create');
Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('forgot.store');
Route::get('/logout', [Logoutcontroller::class, 'destroy'])->name('logout')
    ->middleware('auth');

Route::get('/activity', [ActivityController::class, 'index']);
Route::post('/activity', [ActivityController::class, 'store'])->name('activity.store');
Route::get('/alert', [AlertController::class, 'index']);
Route::get('/alert', [AlertController::class, 'index']);
Route::post('/alert', [AlertController::class, 'store'])->name('alert.store');
Route::get('/alert/{id}', [AlertController::class, 'show']);
Route::get('/poste', [PostController::class, 'index']);
Route::post('/poste', [PostController::class, 'store'])->name('poste.store');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::get('/profile/{id}', [UserController::class, 'show'])->middleware('auth');
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store')->middleware('auth');


