<?php

//admin
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
//auth
use App\Http\Controllers\Auth\AuthController;
//front
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SubscriptionController;
use App\Http\Controllers\Front\CommentController;

/*
 *
 *
 *
 * */

Route::name('front.')->middleware('about')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');

    //projects
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
    Route::get('/project-details/{slug}', [ProjectController::class, 'projectDetails'])->name('project-details');

    //blogs
    Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
    Route::get('/blogs/category/{category}', [BlogController::class, 'index'])->name('blogs.category');
    Route::get('/blog/detail/{slug}', [BlogController::class, 'blogDetails'])->name('blog-details');

    Route::post('/blog-comment', [CommentController::class, 'comment'])->name('blog-comment');

    //contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');

    //subscription
    Route::post('/subscription', [SubscriptionController::class, 'subscription'])->name('subscription');
    Route::get('/subscription-verify/{token}', [SubscriptionController::class, 'verify'])->name('subscription-verify');
});

Route::prefix('/admin')->middleware(['auth'])->name('admin.')->group(function () {
    //Dashboard
    Route::get('/', [DashboardController::class, 'dashboard'])->name('index');

    //cv-upload-download
    Route::get('/cv-download', [DashboardController::class, 'cvDownload'])->name('cv-download');
    Route::post('/cv-upload', [DashboardController::class, 'cvUpload'])->name('cv-upload');

    //services
    Route::resource('/service', ServiceController::class);
    Route::post('/service/change-status', [ServiceController::class, 'changeStatus'])->name('service.change-status');
    Route::post('/service/change-is-featured', [ServiceController::class, 'changeIsFeatured'])->name('service.change-is-featured');

    //category
    Route::resource('/category', CategoryController::class);
    Route::post('/category/change-status', [CategoryController::class, 'changeStatus'])->name('category.change-status');

    //project
    Route::resource('/project', AdminProjectController::class);
    Route::post('/project/change-status', [AdminProjectController::class, 'changeStatus'])->name('project.change-status');

    //blog_blog-category
    Route::resource('/blog-category', BlogCategoryController::class);
    Route::post('/blog-category/change-status', [BlogCategoryController::class, 'changeStatus'])->name('blog-category.change-status');

    //blog
    Route::resource('/blog', AdminBlogController::class);
    Route::post('/blog/change-status', [AdminBlogController::class, 'changeStatus'])->name('blog.change-status');


    //about
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('index');
        Route::post('/', [AboutController::class, 'generalInfo']);
    });

    //experience
    Route::resource('/experience', ExperienceController::class);
    Route::post('/experience/change-status', [ExperienceController::class, 'changeStatus'])->name('experience.change-status');

    //education
    Route::resource('/education', EducationController::class);
    Route::post('/education/change-status', [EducationController::class, 'changeStatus'])->name('education.change-status');

    //skill
    Route::resource('/skill', SkillController::class);
    Route::post('/skill/change-status', [SkillController::class, 'changeStatus'])->name('skill.change-status');

    //contact
    Route::resource('/contact', AdminContactController::class);

    //company
    Route::resource('/company', CompanyController::class);
    Route::post('/company/change-status', [CompanyController::class, 'changeStatus'])->name('company.change-status');

    //comment
    Route::get('/comment', [AdminCommentController::class, 'comments'])->name('comments');
    Route::get('/unverified-comment', [AdminCommentController::class, 'unverifiedComments'])->name('unverified-comments');
    Route::delete('/comment/destroy/{id}', [AdminCommentController::class, 'destroy'])->name('comment.destroy');
    Route::post('/comment/restore/{id}', [AdminCommentController::class, 'restore'])->name('comment.restore');
    Route::post('/comment/change-status', [AdminCommentController::class, 'changeStatus'])->name('comment.change-status');
    Route::post('/comment/change-verify', [AdminCommentController::class, 'changeVerify'])->name('comment.change-verify');
});


//auth
Route::get('/login', [AuthController::class, 'loginShow'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
