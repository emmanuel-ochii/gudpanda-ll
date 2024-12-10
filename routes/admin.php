<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->controller(AdminController::class)->group(function () {
    Route::get('/', 'dashboard')->name('admin.dashboard');
    Route::get('/category', 'category')->name('admin.category');
    Route::get('/add-category', 'addCategory')->name('admin.addCategory');
});

