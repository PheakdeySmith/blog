<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('front.index');

Route::get('/about', [HomeController::class, 'about'])->name('front.about');

Route::get('/services', [HomeController::class, 'services'])->name('front.services');

Route::get('/packages', [HomeController::class, 'package'])->name('front.package');

Route::get('/destination', [HomeController::class, 'destination'])->name('front.destination');

Route::get('/booking', [HomeController::class, 'booking'])->name('front.booking');

Route::get('/team', [HomeController::class, 'team'])->name('front.team');

Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('front.testimonial');

Route::get('/404', [HomeController::class, 'error'])->name('front.404');
?>
