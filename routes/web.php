<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CustomAuthController::class, 'home'])->name('home');
Route::get('/about', [CustomAuthController::class, 'about'])->name('about');
Route::get('/contact-us', [CustomAuthController::class, 'contact'])->name('contact');
Route::post('/contact-us/submit', [CustomAuthController::class, 'submitContactForm'])->name('contact.submit');
// Route::get('/gallery-and-events', [CustomAuthController::class, 'galleryAndEvents'])->name('gallery');