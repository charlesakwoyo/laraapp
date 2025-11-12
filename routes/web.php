<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\Admin\ReportController;

// Public Routes
Route::get('/', fn() => view('home'))->name('home');
Route::get('/features', fn() => view('features'))->name('features');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', [ServiceController::class, 'publicIndex'])->name('services.public');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/contact', fn() => view('contact'))->name('contact');

// Dashboard Redirect Route
Route::middleware(['auth'])->get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('dashboard.user');
    }
})->name('dashboard');

// USER DASHBOARD & PROFILE
Route::middleware(['auth', 'user.role'])->prefix('dashboard')->group(function () {
    Route::get('/user', fn() => view('dashboard.user'))->name('dashboard.user');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ADMIN DASHBOARD, SERVICES, USERS, REPORTS
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', fn() => view('dashboard.admin'))->name('dashboard');

    // Services CRUD
    Route::resource('services', ServiceController::class);

    // Users list
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Reports
    Route::prefix('reports')->group(function () {
        Route::get('/', [ReportController::class, 'index'])->name('reports.index');

        // PDF Exports
        Route::get('/users/pdf', [ReportController::class, 'usersPdf'])->name('reports.users.pdf');
        Route::get('/services/pdf', [ReportController::class, 'servicesPdf'])->name('reports.services.pdf');
        Route::get('/bookings/pdf', [ReportController::class, 'bookingsPdf'])->name('reports.bookings.pdf');

        // Excel Exports
        Route::get('/users/excel', [ReportController::class, 'usersExcel'])->name('reports.users.excel');
        Route::get('/services/excel', [ReportController::class, 'servicesExcel'])->name('reports.services.excel');
        Route::get('/bookings/excel', [ReportController::class, 'bookingsExcel'])->name('reports.bookings.excel');
    });

});

// Auth routes
require __DIR__ . '/auth.php';
