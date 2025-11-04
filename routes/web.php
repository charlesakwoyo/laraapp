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
Route::get('/services', [ServiceController::class, 'publicIndex'])->name('services');



// Dashboard Routes

// Unified dashboard redirect route
Route::middleware(['auth'])->get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    } else {
        return redirect()->route('dashboard.user');
    }
})->name('dashboard');


// USER DASHBOARD
Route::middleware(['auth', 'user.role'])->prefix('dashboard')->group(function () {
    Route::get('/user', function () {
        return view('dashboard.user');
    })->name('dashboard.user');

    // Profile management
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//  ADMIN DASHBOARD + SERVICES CRUD
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', fn() => view('dashboard.admin'))->name('dashboard');
    Route::resource('services', ServiceController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
});



Route::middleware(['auth', 'admin'])->prefix('admin')->group(function() {
    Route::get('/reports', [ReportController::class, 'index'])->name('admin.reports.index');

    Route::get('/reports/users/pdf', [ReportController::class, 'usersPdf']);
    Route::get('/reports/services/pdf', [ReportController::class, 'servicesPdf']);
    Route::get('/reports/bookings/pdf', [ReportController::class, 'bookingsPdf']);

    Route::get('/reports/users/excel', [ReportController::class, 'usersExcel']);
    Route::get('/reports/services/excel', [ReportController::class, 'servicesExcel']);
    Route::get('/reports/bookings/excel', [ReportController::class, 'bookingsExcel']);
});






require __DIR__ . '/auth.php';
