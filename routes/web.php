<?php

//auth
use App\Http\Controllers\Auth\AuthController;

//admin
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\EducationController;

//front
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProjectController;
use Illuminate\Support\Facades\Route;

Route::name('front.')->middleware('about')->group(function () {
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
    //Dashboard
    Route::get('/', [DashboardController::class, 'dashboard'])->name('index');

    //cv-upload-download
    Route::get('/cv-download', [DashboardController::class, 'cvDownload'])->name('cv-download');
    Route::post('/cv-upload', [DashboardController::class, 'cvUpload'])->name('cv-upload');

    //Services
    Route::resource('/service', ServiceController::class);
    Route::post('/service/change-status', [ServiceController::class, 'changeStatus'])->name('service.change-status');
    Route::post('/service/change-is-featured', [ServiceController::class, 'changeIsFeatured'])->name('service.change-is-featured');

    //about
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::post('/', [AboutController::class, 'generalInfo']);
    });

    //experience
    Route::resource('/experience', ExperienceController::class);
    Route::post('/experience/change-status', [ExperienceController::class, 'changeStatus'])->name('experience.change-status');

    //experience
    Route::resource('/education', EducationController::class);
    Route::post('/education/change-status', [EducationController::class, 'changeStatus'])->name('education.change-status');
});


//auth
Route::get('/login', [AuthController::class, 'loginShow'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
