<?php

use App\Http\Controllers\Client\CourseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\LoginController;
use App\Http\Controllers\Client\ProfileController;
use App\Http\Controllers\Client\WorkController;
use App\Models\Course;
use App\Models\Work;
use Symfony\Component\HttpKernel\Profiler\Profile;
use Whoops\Run;
use const Dom\NAMESPACE_ERR;

Route::get('/', function () {
    return view('landing');
})->name('/');

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

        Route::post('courses/{id}', [WorkController::class, 'store'])->name('post.work');
        Route::get('courses/{course}/{work}', [WorkController::class, 'show'])->name('work.show');

        Route::get('profile', [ProfileController::class, 'index'])->name('profile');
        Route::get('profile/{id}', [ProfileController::class, 'teacher_profile'])->name('teacher_profile');

        Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
    });

