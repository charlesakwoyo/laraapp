<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ContactController;

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Other pages
Route::get('/features', [FeaturesController::class, 'index'])->name('features');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
