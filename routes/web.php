<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\VendorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::view('/', 'welcome');

Route::prefix('/')->controller(GuestController::class)->group(function () {
    Route::get('', 'index')->name('guest.home');

    // Category-based product listing
    Route::get('/category/{slug}', 'categoryProducts')->name('guest.categoryProducts');

    Route::get('/product/{category}/{product_name}', 'showItem')->name('product.details');




    Route::get('bid', 'bid')->name('guest.bid');;
    Route::get('contact', 'contact')->name('guest.contact');
    Route::get('about', 'about')->name('guest.about');
    Route::get('shop', 'shop')->name('guest.shop');

    Route::get('search', 'search')->name('guest.search');


    Route::get('faq', 'faq')->name('guest.faq');
    Route::get('become-a-giver', 'becomeAGiver')->name('guest.becomeAGiver');
    Route::get('become-a-vendor', 'becomeAVendor')->name('guest.becomeAVendor');
    Route::get('what-we-do', 'whatWeDo')->name('guest.whatWeDo');
    Route::get('join-our-team', 'JoinOurTeam')->name('guest.JoinOurTeam');
});

Route::prefix('customer')->middleware(['auth', 'role:customer'])->controller(CustomerController::class)->group(function () {
    Route::get('/', 'dashboard')->name('customer.dashboard');
});

Route::prefix('manager')->middleware(['auth', 'role:manager'])->controller(ManagerController::class)->group(function () {
    Route::get('/', 'dashboard')->name('manager.dashboard');
});

Route::prefix('vendor')->middleware(['auth', 'role:vendor'])->controller(VendorController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('vendor.dashboard');

    // Items/Product Management
    Route::get('/all-items', 'allItems')->name('vendor.allItems');
    Route::get('/add-item', 'addItem')->name('vendor.addItem');
    Route::get('/item-details', 'itemDetails')->name('vendor.itemDetails');
    Route::get('/products/{product}', 'showItemDetails')->name('vendor.showItemDetails');
    Route::get('/products/{product}/edit', 'editItem')->name('vendor.editItem');
    Route::delete('/product/delete-item/{id}', [VendorController::class, 'deleteItem'])->name('vendor.deleteItem');



    // Order Management
    Route::get('/order-overview', 'orders')->name('vendor.orders');

    // Coupon Management
    Route::get('/coupon-overview', 'coupons')->name('vendor.coupons');
    Route::get('/couponManagement', 'couponManagement')->name('vendor.couponManagement');
});

// Route::view('dashboard', 'dashboard')
//     ->middleware(['auth', 'verified'])
//     ->name('dashboard');

Route::get('/dashboard', function () {
    $user = Auth::user();

    if (!$user) {
        return redirect()->route('login');
    }

    if ($user->role === \App\Models\User::ROLE_ADMIN) {
        return redirect()->route('admin.dashboard');
    } elseif ($user->role === \App\Models\User::ROLE_MANAGER) {
        return redirect()->route('manager.dashboard');
    } elseif ($user->role === \App\Models\User::ROLE_VENDOR) {
        return redirect()->route('vendor.dashboard');
    } else {
        return redirect()->route('customer.dashboard');
    }
})->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
