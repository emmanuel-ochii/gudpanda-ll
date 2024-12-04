<?php

namespace App\Livewire;

use App\Models\Category as CategoryModel;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Category extends Component
{
    use WithFileUploads;

    public $name, $slug, $icon, $image;

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function saveCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug',
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $this->image ? $this->image->store('categories', 'public') : null;

        CategoryModel::create([
            'name' => $this->name,
            'slug' => $this->slug,
            'icon' => $this->icon,
            'image' => $imagePath,
        ]);

        session()->flash('success', 'Category saved successfully!');
        $this->reset();
    }

    public function render()
    {
        // $categories = CategoryModel::withCount('products')->get();


        return view('livewire.category');
    }

    public function deleteCategory($id)
    {
        $category = CategoryModel::find($id);
        if ($category) {
            // Delete image from storage if exists
            if ($category->image) {
                \Storage::delete('public/' . $category->image);
            }
            $category->delete();
            session()->flash('success', 'Category deleted successfully.');
        }
    }
}
