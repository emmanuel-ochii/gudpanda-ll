<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Product extends Component
{
    public function render()
    {
        return view('livewire.product.product', [
            'categories' => Category::all(),
            'subcategories' => SubCategory::all(),
        ]);
    }
}
