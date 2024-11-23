<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->controller(AdminController::class)->group(function () {
    Route::get('/', 'dashboard')->name('admin.dashboard');
});
