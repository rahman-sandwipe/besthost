<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    // User mangments
    Route::get('/',                         [DashboardController::class, 'admin'])->name('admin');
    Route::get('/users',                    [DashboardController::class, 'users'])->name('users');

    // === User mangments ends
    Route::get('/profile',                  [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile',                 [ProfileController::class, 'nameUpdate'])->name('profile.update');
    Route::delete('/profile',               [ProfileController::class, 'destroy'])->name('profile.destroy');
    // User mangments ends

    /* --------------------------------------------------------------------------*/
    // Category Route
    Route::get('/category',                 [CategoryController::class, 'index'])->name('category');
    Route::get('/create/category',          [CategoryController::class, 'create'])->name('create.category');
    Route::post('/create/category',         [CategoryController::class, 'store']);
    Route::get('/edit/category/{id}',       [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/edit/category/{id}',      [CategoryController::class, 'update']);
    Route::get('/delete/category/{id}',     [CategoryController::class, 'delete'])->name('delete.category');
    Route::get('/status/category/{id}',     [CategoryController::class, 'status'])->name('status.category');

    // Blog Route
    Route::get('/blogs',                    [BlogController::class, 'index'])->name('blogs');
    Route::get('/create/blog',              [BlogController::class, 'create'])->name('create.blog');
    Route::post('/create/blog',             [BlogController::class, 'store']);
    Route::get('/edit/blog/{id}',           [BlogController::class, 'edit'])->name('edit.blog');
    Route::post('/edit/blog/{id}',          [BlogController::class, 'update']);
    Route::get('/delete/blog/{id}',         [BlogController::class, 'delete'])->name('delete.blog');
    Route::get('/status/news/{id}',         [BlogController::class, 'status'])->name('status.blog');



    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
