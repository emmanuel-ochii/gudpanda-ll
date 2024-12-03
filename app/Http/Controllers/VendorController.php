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
}
