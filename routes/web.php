<?php
use App\Http\Controllers\fushionController;

Route::get('/', [fushionController::class, 'home'])->name('home');
Route::get('/about', [fushionController::class, 'aboutUs'])->name('about');
Route::get('/news', [fushionController::class, 'news'])->name('news');
Route::get('/contact', [fushionController::class, 'contactUs'])->name('contact');

// Routes pour la partie admin
Route::get('/login', [fushionController::class, 'login'])->name('login');
Route::get('/register', [fushionController::class, 'register'])->name('register');