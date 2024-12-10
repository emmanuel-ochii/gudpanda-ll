<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddCategory extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $icon;
    public $image = null;
    public $editMode = false; // Track if editing
    public $editCategoryId = null;

    protected $listeners = ['testEvent' => '$refresh'];

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);

        $this->editMode = true;
        $this->editCategoryId = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->icon = $category->icon;
        $this->image = null; // Reset image input
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    // public function saveCategory()
    // {
    //     $this->validate([
    //         'name' => 'required|string|max:255',
    //         'slug' => 'required|string|max:255|unique:categories,slug,' . $this->editCategoryId,
    //         'icon' => 'nullable|string|max:255',
    //         'image' => 'nullable|image|max:2048',
    //     ]);

    //     $imagePath = $this->image ? $this->image->store('categories', 'public') : null;

    //     if ($this->editMode) {
    //         // Update existing category
    //         $category = Category::findOrFail($this->editCategoryId);
    //         $category->update([
    //             'name' => $this->name,
    //             'slug' => $this->slug,
    //             'icon' => $this->icon,
    //             'image' => $imagePath ?? $category->image,
    //         ]);
    //         session()->flash('success', 'Category updated successfully!');
    //     } else {
    //         // Create new category
    //         Category::create([
    //             'name' => $this->name,
    //             'slug' => $this->slug,
    //             'icon' => $this->icon,
    //             'image' => $imagePath,
    //         ]);
    //         session()->flash('success', 'New category added successfully!');
    //     }

    //     $this->resetForm();
    // }

    // Updated saveCategory method
    public function saveCategory()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:categories,slug,' . $this->editCategoryId,
            'icon' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $this->image ? $this->image->store('categories', 'public') : null;

        if ($this->editMode) {
            $category = Category::findOrFail($this->editCategoryId);
            $category->update([
                'name' => $this->name,
                'slug' => $this->slug,
                'icon' => $this->icon,
                'image' => $imagePath ?? $category->image,
            ]);

            // Emit success message for Toastify
            // $this->dispatch('toastifySuccess', 'Category updated successfully!');
            session()->flash('success', 'Category updated successfully!');
        } else {
            Category::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'icon' => $this->icon,
                'image' => $imagePath,
            ]);

            // Emit success message for Toastify
            // $this->dispatch('toastifySuccess', 'New category added successfully!');
            session()->flash('success', 'New category created successfully!');
        }

        $this->resetForm();
    }

    // Reset the form and exit edit mode
    public function resetForm()
    {
        $this->reset(['name', 'slug', 'icon', 'image', 'editMode', 'editCategoryId']);
    }

    // Delete a category
    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        session()->flash('delete', 'Category deleted successfully!');
    }

    public function triggerEvent()
    {
        $this->dispatchBrowserEvent('showAlert', ['message' => 'Hello from Livewire!']);

        // dd('sdsd');
    }

    public function render()
    {
        $categories = Category::all();

        return view('livewire.admin.category.add-category', compact('categories'));
    }
}
