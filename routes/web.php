<?php

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


////////////////AUTHENTICATION /////////////////

Route::get('forgetpassword', [AuthController::class, 'getForget'])->name('view.forget');
Route::post('forgetpassword', [AuthController::class, 'postForget'])->name('user.forget');

Route::get('reset/{token}', [AuthController::class, 'getReset'])->name('reset');
