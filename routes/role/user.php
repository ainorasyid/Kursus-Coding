<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user\DashboardController as UserDashboard;
use App\Http\Controllers\user\CppController;
use App\Http\Controllers\user\CssController;
use App\Http\Controllers\user\HtmlController;
use App\Http\Controllers\user\JavascriptController;
use App\Http\Controllers\user\PhpController;

Route::prefix('user')->name('user.')->group(function() {
    Route::get('/dashboard', [UserDashboard::class, 'index'])->name('dashboard');

    // route materi html
    Route::get('/pembelajaran/html', [HtmlController::class, 'index'])->name('learning.html');
    Route::get('/pembelajaran/html/pengenalan', [HtmlController::class, 'pengenalan'])->name('learning.html.pengenalan');
    Route::get('/pembelajaran/html/struktur-html', [HtmlController::class, 'strukturHtml'])->name('learning.html.struktur-html');
    Route::get('/pembelajaran/html/heading-paragraph', [HtmlController::class, 'headingParagraph'])->name('learning.html.heading-paragraph');
    Route::get('/pembelajaran/html/link-image', [HtmlController::class, 'linkImage'])->name('learning.html.link-image');

    // route materi html
    Route::get('/pembelajaran/css', [CssController::class, 'index'])->name('learning.css');
    Route::get('/pembelajaran/css/pengenalan', [CssController::class, 'pengenalan'])->name('learning.css.pengenalan');
    Route::get('/pembelajaran/css/selector', [CssController::class, 'selector'])->name('learning.css.selector');
    Route::get('/pembelajaran/css/property', [CssController::class, 'property'])->name('learning.css.property');
    Route::get('/pembelajaran/css/layout', [CssController::class, 'layout'])->name('learning.css.layout');

    // route materi js
    Route::get('/pembelajaran/javascript', [JavascriptController::class, 'index'])->name('learning.javascript');
    Route::get('/pembelajaran/javascript/pengenalan', [JavascriptController::class, 'pengenalan'])->name('learning.javascript.pengenalan');
    Route::get('/pembelajaran/javascript/variable', [JavascriptController::class, 'variable'])->name('learning.javascript.variable');
    Route::get('/pembelajaran/javascript/function', [JavascriptController::class, 'function'])->name('learning.javascript.function');
    Route::get('/pembelajaran/javascript/dom', [JavascriptController::class, 'dom'])->name('learning.javascript.dom');

    // route materi php
    Route::get('/pembelajaran/php', [PhpController::class, 'index'])->name('learning.php');
    Route::get('/pembelajaran/php/pengenalan', [PhpController::class, 'pengenalan'])->name('learning.php.pengenalan');
    Route::get('/pembelajaran/php/percabangan', [PhpController::class, 'percabangan'])->name('learning.php.percabangan');
    Route::get('/pembelajaran/php/variable', [PhpController::class, 'variable'])->name('learning.php.variable');
    Route::get('/pembelajaran/php/looping', [PhpController::class, 'looping'])->name('learning.php.looping');


    // route materi c++
    Route::get('/pembelajaran/cpp', [CppController::class, 'index'])->name('learning.cpp');
    Route::get('/pembelajaran/cpp/pengenalan', [CppController::class, 'pengenalan'])->name('learning.cpp.pengenalan');
    Route::get('/pembelajaran/cpp/percabangan', [CppController::class, 'percabangan'])->name('learning.cpp.percabangan');
    Route::get('/pembelajaran/cpp/looping', [CppController::class, 'looping'])->name('learning.cpp.looping');
    Route::get('/pembelajaran/cpp/variable', [CppController::class, 'variable'])->name('learning.cpp.variable');
});