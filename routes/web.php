<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
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

///////////////////// Frontend & Backend Routes ///////
Route::get('about/show', [AboutController::class, 'showAbout'])->name('show.about');
Route::get('about', [AboutController::class, 'getAbout'])->name('view.about');
Route::post('about', [AboutController::class, 'postAbout'])->name('post.about');

Route::get('contact/show', [ContactController::class, 'showContact'])->name('show.contact');
Route::post('contact/show', [ContactController::class, 'postComplain'])->name('user.complain');

Route::get('contact', [ContactController::class, 'getContact'])->name('view.contact');
Route::post('contact', [ContactController::class, 'postContact'])->name('post.contact');
Route::get('message', [ContactController::class, 'getMessage'])->name('view.message');

Route::get('project/show', [ProjectController::class, 'showProject'])->name('show.project');
Route::get('project', [ProjectController::class, 'getProject'])->name('view.project');
Route::post('project', [ProjectController::class, 'postProject'])->name('post.project');


Route::get('home/show', [HomeController::class, 'showHome'])->name('show.home');
Route::get('home', [HomeController::class, 'getHome'])->name('view.home');
Route::post('home', [HomeController::class, 'postHome'])->name('post.home');


Route::get('service/show', [ServiceController::class, 'showService'])->name('show.service');
Route::get('service', [ServiceController::class, 'getService'])->name('view.service');
Route::post('service', [ServiceController::class, 'postService'])->name('post.service');







////////////////AUTHENTICATION /////////////////

Route::get('forgetpassword', [AuthController::class, 'getForget'])->name('view.forget');
Route::post('forgetpassword', [AuthController::class, 'postForget'])->name('user.forget');

Route::get('reset/{token}', [AuthController::class, 'getReset'])->name('reset');
Route::post('reset/{token}', [AuthController::class, 'postReset'])->name('post.reset');
