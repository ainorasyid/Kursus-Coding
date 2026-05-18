<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\mentor\DashboardController as MentorDashboard;

Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/admin/dashboard', [AdminDashboard::class, 'index'])->name('admin.dashboard');

Route::get('/mentor/dashboard', [MentorDashboard::class, 'index'])->name('mentor.dashboard');

require __DIR__ . '/role/user.php';
