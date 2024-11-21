<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

// Route::view('/', 'welcome');


Route::prefix('/')->controller(GuestController::class)->group(function () {
    Route::get('', 'index')->name('guest.home');
    Route::get('bid', 'bid')->name('guest.bid');;
    Route::get('contact', 'contact')->name('guest.contact');
    Route::get('about', 'about')->name('guest.about');
    Route::get('shop', 'shop')->name('guest.shop');
    Route::get('search', 'search')->name('guest.search');
    Route::get('faq', 'faq')->name('guest.faq');
    Route::get('become-a-giver', 'becomeAGiver')->name('guest.becomeAGiver');
    Route::get('what-we-do', 'whatWeDo')->name('guest.whatWeDo');
    Route::get('join-our-team', 'JoinOurTeam')->name('guest.JoinOurTeam');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
