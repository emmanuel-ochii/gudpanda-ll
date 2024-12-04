<?php

namespace App\Livewire;

use App\Models\Category as CategoryModel;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


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
        return view('livewire.category');
    }
}
