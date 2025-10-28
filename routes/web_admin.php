<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
 
Route::get('admin', [AdminController::class, 'index'])->name('admin');