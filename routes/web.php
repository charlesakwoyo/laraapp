<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// =========================
// PUBLIC ROUTES
// =========================
Route::get('/', fn() => view('home'))->name('home');
Route::get('/features', fn() => view('features'))->name('features');
Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/contact', fn() => view('contact'))->name('contact');

// =========================
// DASHBOARD ROUTE
// =========================
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// =========================
// SERVICE MANAGEMENT (CRUD)
// =========================
Route::middleware(['auth'])->group(function () {
    Route::resource('services', ServiceController::class);
});

// =========================
// PROFILE ROUTES
// =========================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
