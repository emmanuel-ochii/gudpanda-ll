<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Pages.Admin.dashboard');
    }

    public function category()
    {
        return view('Pages.Admin.Category.category');
    }

    public function addCategory()
    {
        return view('Pages.Admin.Category.add-category');
    }
}
