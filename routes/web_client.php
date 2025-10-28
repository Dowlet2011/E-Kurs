<?php

use App\Http\Controllers\Client\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\ProfileController;
use App\Models\Course;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Whoops\Run;

Route::get('/', function () {
    return view('landing');
});

Route::get('locale/{locale}', [HomeController::class, 'locale'])->name('locale')->where('locale', '[a-z]+');

Route::middleware('guest')
    ->middleware('throttle:60,1')
    ->group(function () {
        Route::get('login', [LoginController::class, 'create'])->name('login');
        Route::post('login', [LoginController::class, 'store']);
    });

Route::middleware('auth')
    ->group(function () {
        Route::get('home', function () {
            return view('client.frontend.home');
        })->name('home');

        Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
        Route::get('courses/{id}', [CourseController::class, 'show'])->name('courses.show');

        Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
    });


Route::get('profile', [ProfileController::class, 'index'])->name('profile');