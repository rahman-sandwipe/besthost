<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

Route::get('/',                 [HomeController::class, 'index']);
Route::get('/search-domain',    [HomeController::class, 'searchDomain'])->name('searchDomain');
Route::get('/blogs',            [HomeController::class, 'blogs'])->name('blogs');
Route::get('/contacts',         [HomeController::class, 'contacts'])->name('contacts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
