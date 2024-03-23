<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ActivityjoinController;
use App\Http\Controllers\AlertCommentController;
use App\Http\Controllers\AlertController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\BoutiqueController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CommentsActivitiesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikedController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FactureController;
use Illuminate\Support\Facades\Storage;

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

Route::get('/market', [BoutiqueController::class, 'index']);
Route::get('/produit/{id}', [BoutiqueController::class, 'show'])->name('produit.show');
Route::post('/produit', [ProduitController::class, 'store'])->name('produit.store');

Route::get('/activity', [ActivityController::class, 'index']);
Route::get('/alert', [AlertController::class, 'index']);
Route::post('/alert', [AlertController::class, 'store'])->name('alert.store');
Route::get('/poste', [PostController::class, 'index']);
Route::post('/poste', [PostController::class, 'store'])->name('poste.store');
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth');
Route::get('/profile/{id}', [UserController::class, 'show']);
Route::post('/search', [HomeController::class, 'search']);
Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
Route::post('/liked_post', [PostLikedController::class, 'store'])->name('liked_post.store');

Route::get('/storage/{filename}', [HomeController::class, 'storage']);

Route::middleware(['web'])->group(function () {
    Route::get('/alert/{id}', [AlertController::class, 'show']);
    Route::get('/activite/{id}', [ActivityController::class, 'show']);
    Route::post('/activite/join', [ActivityjoinController::class, 'store']);
    Route::post('/activite/devenir', [ActivityjoinController::class, 'devenir']);
    // Route::get('/alert/{id}', [AlertController::class, 'show']);
    Route::post('/activite/comment', [CommentsActivitiesController::class, 'store'])->name('comment.activite.store');
    Route::get('/parametre', [ParametreController::class, 'index']);
    Route::post('/activity', [ActivityController::class, 'store'])->name('activity.store');
    Route::post('/alert_comment', [AlertCommentController::class, 'store'])->name('alert_comment.store');
    Route::post('/profile-update/{id}', [UserController::class, 'update']);
    Route::post('/profile/reset/{id}', [UserController::class, 'resetPassword']);
    Route::post('/photo/profile', [UserController::class, 'photoProfile']);
    Route::post('/photo/couverture', [UserController::class, 'photoCouverture']);
    Route::post('/list/tag', [HomeController::class, 'ListTag']);
    Route::resource('panier', CartController::class)->only([
        'index', 'store', 'update', 'destroy'
    ]);
    Route::resource('facture', FactureController::class)->only([
        'index', 'store', 'update', 'destroy'
    ]);
    // Route::resource('panier', 'CartController')->only(['index', 'store', 'update', 'destroy']);
});

