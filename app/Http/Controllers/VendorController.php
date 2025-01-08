<?php

namespace App\Http\Controllers;

class VendorController extends Controller
{
    public function dashboard()
    {
        return view('Pages.Vendor.dashboard');
    }

    public function allItems()
    {
        return view('Pages.Vendor.all-items');
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
