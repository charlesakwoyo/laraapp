<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;

// Public routes
Route::get('/', fn() => view('home'))->name('home');
Route::get('/features', fn() => view('features'))->name('features');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', [ServiceController::class, 'publicIndex'])->name('services');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/contact', fn() => view('contact'))->name('contact');


// DASHBOARDS BY ROLE

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/admin', fn() => view('dashboard.admin'))->name('dashboard.admin');
    Route::get('/dashboard/employee', fn() => view('dashboard.employee'))->name('dashboard.employee');
    Route::get('/dashboard/user', fn() => view('dashboard.user'))->name('dashboard.user');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ADMIN CRUD ROUTES

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', fn() => view('dashboard.admin'))->name('dashboard');
    Route::resource('services', ServiceController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});

require __DIR__ . '/auth.php';
