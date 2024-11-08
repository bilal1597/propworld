<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('login', [UserController::class, 'getLogin'])->name('view.login');
Route::post('login', [UserController::class, 'postLogin'])->name('post.login');
Route::post('logout', [UserController::class, 'logout'])->name('logout');



Route::get('dashboard', [UserController::class, 'index'])->name('view.dashboard');

Route::get('profile', [UserController::class, 'getProfile'])->name('view.profile');
Route::post('profile', [UserController::class, 'updateProfile'])->name('edit.profile');


Route::get('about', [AboutController::class, 'getAbout'])->name('view.about');
Route::post('about', [AboutController::class, 'postAbout'])->name('post.about');







////////////////AUTHENTICATION /////////////////

Route::get('forgetpassword', [AuthController::class, 'getForget'])->name('view.forget');
Route::post('forgetpassword', [AuthController::class, 'postForget'])->name('user.forget');

Route::get('reset/{token}', [AuthController::class, 'getReset'])->name('reset');
Route::post('reset/{token}', [AuthController::class, 'postReset'])->name('post.reset');
