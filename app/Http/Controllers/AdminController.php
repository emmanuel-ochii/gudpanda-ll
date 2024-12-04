<?php

namespace App\Http\Controllers;
use App\Models\Category;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('Pages.Admin.dashboard');
    }

    public function category()
    {
        $categories = Category::all();
        return view('Pages.Admin.Category.category', compact('categories'));
    }

    public function addCategory()
    {
        return view('Pages.Admin.Category.add-category');
    }
}
