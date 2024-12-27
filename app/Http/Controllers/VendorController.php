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
}
