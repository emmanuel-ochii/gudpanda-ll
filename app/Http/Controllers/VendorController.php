<?php

namespace App\Http\Controllers;

use App\Models\Product;

class VendorController extends Controller
{
    public function dashboard()
    {
        return view('Pages.Vendor.dashboard');
    }

    public function allItems()
    {
        $products = Product::with(['category', 'subcategory'])->get();

        return view('Pages.Vendor.Products.all-items', compact('products'));

    }

    public function addItem()
    {
        return view('Pages.Vendor.add-item');
    }

    public function orders()
    {
        return view('Pages.Vendor.Orders.order-overview');
    }

    public function coupons()
    {
        return view('Pages.Vendor.Coupons.coupon-overview');
    }

    public function couponManagement()
    {
        return view('Pages.Vendor.Coupons.couponManagement');
    }
}
