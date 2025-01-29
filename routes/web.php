<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\detailProjController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('login', [UserController::class, 'getLogin'])->name('login');
Route::post('login', [UserController::class, 'postLogin'])->name('post.login');
Route::post('logout', [UserController::class, 'logout'])->name('logout');



///////////////////// Frontend & Backend Routes ///////

Route::middleware(['auth'])->group(function () {
    /////////dashboard route ////////////
    Route::get('dashboard', [UserController::class, 'index'])->name('view.dashboard');

    Route::get('profile', [UserController::class, 'getProfile'])->name('view.profile');
    Route::post('profile', [UserController::class, 'updateProfile'])->name('edit.profile');

    /////////////about routes //////////////
    Route::get('about', [AboutController::class, 'getAbout'])->name('view.about');
    Route::post('about', [AboutController::class, 'postAbout'])->name('post.about');

    //////////// contact ////////////////////

    Route::get('contact', [ContactController::class, 'getContact'])->name('view.contact');
    Route::post('contact', [ContactController::class, 'postContact'])->name('post.contact');
    Route::get('message', [ContactController::class, 'getMessage'])->name('view.message');

    /////////////// project ////////

    Route::get('project/list', [ProjectController::class, 'listProject'])->name('list.project');
    Route::get('project/add', [ProjectController::class, 'addProject'])->name('add.project');
    Route::post('project/add', [ProjectController::class, 'storeProject'])->name('store.project');
    // Route::get('project/{id}', [ProjectController::class, 'getProject'])->name('view.project');
    Route::post('project/', [ProjectController::class, 'editProject'])->name('post.project');
    Route::post('project/delete/{id}', [ProjectController::class, 'deleteProject'])->name('delete.project');
    Route::get('projects/details/{id}', [detailProjController::class, 'projectDetails'])->name('detail.project');


    ///////////////// home ////

    Route::get('home', [HomeController::class, 'getHome'])->name('view.home');
    Route::post('home', [HomeController::class, 'postHome'])->name('post.home');

    /////////// service ///////////////
    Route::get('service', [ServiceController::class, 'getService'])->name('view.service');
    Route::post('service', [ServiceController::class, 'postService'])->name('post.service');
});

////////////////// front end pages //////////////

Route::get('about/show', [AboutController::class, 'showAbout'])->name('show.about');

Route::get('contact/show', [ContactController::class, 'showContact'])->name('show.contact');
Route::post('contact/show', [ContactController::class, 'postComplain'])->name('user.complain');

// Route::get('project/{id}', [ProjectController::class, 'getProject'])->name('view.project');
Route::get('project/show', [ProjectController::class, 'showProject'])->name('show.project');

Route::get('home/show', [HomeController::class, 'showHome'])->name('show.home');

Route::get('service/show', [ServiceController::class, 'showService'])->name('show.service');


////////////////AUTHENTICATION /////////////////

Route::get('forgetpassword', [AuthController::class, 'getForget'])->name('view.forget');
Route::post('forgetpassword', [AuthController::class, 'postForget'])->name('user.forget');

Route::get('reset/{token}', [AuthController::class, 'getReset'])->name('reset');
Route::post('reset/{token}', [AuthController::class, 'postReset'])->name('post.reset');
