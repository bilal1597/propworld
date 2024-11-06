<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('login', [UserController::class, 'getLogin'])->name('view.login');
Route::post('login', [UserController::class, 'postLogin'])->name('post.login');
Route::post('logout', [UserController::class, 'logout'])->name('logout');

// Route::get('forgetpassword', [UserController::class, 'forget'])->name('view.forget');


Route::get('dashboard', [UserController::class, 'index'])->name('view.dashboard');
