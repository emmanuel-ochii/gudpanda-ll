<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        return view('Pages.Customer.dashboard');
    }
    public function savedItems()
    {
        return view('Pages.Customer.saved-items');
    }
}
