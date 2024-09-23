<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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



require __DIR__ . '/auth.php';

Route::get('top', [PostsController::class, 'index']);

Route::get('profile', [ProfileController::class, 'profile']);

Route::get('search', [UsersController::class, 'index']);

//ログイン情報の取得
Route::post('show', [RegisteredUserController::class, 'show']);
// Route::post('show', [RegisteredUserController::class, 'show']);
// Route::get('show',function(){
//     $value = session('username');
//     $value = session('username','$username');
//     session(['username'=>'username']);
// });
// Route::get('show', [PostsController::class, 'navigation']);
// Route::post('show', [PostsController::class, 'top']);

Route::get('follow-list', [PostsController::class, 'index']);
Route::get('follower-list', [PostsController::class, 'index']);

Route::get('logout', [AuthenticatedSessionController::class, 'logout']);
