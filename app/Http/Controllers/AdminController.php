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

        return view('Pages.Admin.Category.category', [
            'categories' => $categories,
            'getCategoryBgClass' => [$this, 'getCategoryBgClass'],
        ]);

    }

    // Helper method to assign background class dynamically
    public function getCategoryBgClass($index)
    {
        $bgClasses = [
            'bg-secondary-subtle',
            'bg-primary-subtle',
            'bg-warning-subtle',
            'bg-info-subtle',
        ];

        // Cycle through the background classes based on the index
        return $bgClasses[$index % count($bgClasses)];
    }
}
