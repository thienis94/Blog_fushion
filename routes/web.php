<?php
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home'])->name('home');
Route::get('/about', [BlogController::class, 'aboutUs'])->name('about');
Route::get('/news', [BlogController::class, 'news'])->name('news');
Route::get('/contact', [BlogController::class, 'contactUs'])->name('contact');

// Routes pour la partie admin
Route::get('/login', [BlogController::class, 'login'])->name('login');
Route::get('/register', [BlogController::class, 'register'])->name('register');