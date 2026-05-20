<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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


// ==================== LOGIN ====================

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/mentor/dashboard', [MentorDashboard::class, 'index'])->name('mentor.dashboard');

// ==================== QUIZ HTML  ====================

Route::get('/quiz/html/1', function () {
    return view('user.quiz.html.quiz1');
});
Route::get('/quiz/html/2', function () {
    return view('user.quiz.html.quiz2');
});
Route::get('/quiz/html/3', function () {
    return view('user.quiz.html.quiz3');
});
Route::get('/quiz/html/4', function () {
    return view('user.quiz.html.quiz4');
});
// ==================== QUIZ c++  ====================

Route::get('/quiz/cpp/1', function () {
    return view('user.quiz.cpp.quiz1');
});
Route::get('/quiz/cpp/2', function () {
    return view('user.quiz.cpp.quiz2');
});
Route::get('/quiz/cpp/3', function () {
    return view('user.quiz.cpp.quiz3');
});
Route::get('/quiz/cpp/4', function () {
    return view('user.quiz.cpp.quiz4');
});
// ==================== QUIZ javascript  ====================

Route::get('/quiz/javascript/1', function () {
    return view('user.quiz.javascript.quiz1');
});
Route::get('/quiz/javascript/2', function () {
    return view('user.quiz.javascript.quiz2');
});
Route::get('/quiz/javascript/3', function () {
    return view('user.quiz.javascript.quiz3');
});
Route::get('/quiz/javascript/4', function () {
    return view('user.quiz.javascript.quiz4');
});
// ==================== QUIZ css  ====================

Route::get('/quiz/css/1', function () {
    return view('user.quiz.css.quiz1');
});
Route::get('/quiz/css/2', function () {
    return view('user.quiz.css.quiz2');
});
Route::get('/quiz/css/3', function () {
    return view('user.quiz.css.quiz3');
});
Route::get('/quiz/css/4', function () {
    return view('user.quiz.css.quiz4');
});
// ==================== QUIZ php  ====================

Route::get('/quiz/php/1', function () {
    return view('user.quiz.php.quiz1');
});
Route::get('/quiz/php/2', function () {
    return view('user.quiz.php.quiz2');
});
Route::get('/quiz/php/3', function () {
    return view('user.quiz.php.quiz3');
});
Route::get('/quiz/php/4', function () {
    return view('user.quiz.php.quiz4');
});


// ==================== USER ROLE ====================

require __DIR__ . '/role/user.php';
Route::get('/mentor/dashboard', [MentorDashboard::class, 'index'])->name('mentor.dashboard');

require __DIR__ . '/role/admin.php';
require __DIR__ . '/role/user.php';
