<?php

//auth
use App\Http\Controllers\Auth\AuthController;
//admin
use App\Http\Controllers\Admin\DashboardController;
//front
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProjectController;
use Illuminate\Support\Facades\Route;


Route::name('front.')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    //projects
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/project-details/{slug}', [ProjectController::class, 'projectDetails'])->name('project-details');

    //blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('/blog-details/', [BlogController::class, 'blogDetails'])->name('blog-details');

    //contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
});

Route::prefix('/admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('index');
});

//auth
Route::get('/login', [AuthController::class, 'loginShow'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
