<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;



Route::get('/', fn() => view('home'))->name('home');
Route::get('/features', fn() => view('features'))->name('features');
Route::get('/about', fn() => view('about'))->name('about');

Route::get('/services', [ServiceController::class, 'publicIndex'])->name('services');


Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/contact', fn() => view('contact'))->name('contact');



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // PROFILE ROUTES
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ADMIN ROUTES (Service CRUD)


Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');

    // Admin can manage services via CRUD
    Route::resource('services', ServiceController::class);
});

require __DIR__ . '/auth.php';
