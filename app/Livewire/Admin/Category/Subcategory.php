<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use App\Models\SubCategory as SubCat;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class Subcategory extends Component
{
    use WithFileUploads;

    public $categories;
    public $category_id, $name, $slug, $icon, $image;
    public $editMode = false, $editSubCategoryId;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    public function saveSubCategory()
    {
        $this->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:sub_categories,slug,' . $this->editSubCategoryId,
            'icon' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $this->image ? $this->image->store('subcategories', 'public') : null;

        if ($this->editMode) {
            $subCategory = SubCategory::findOrFail($this->editSubCategoryId);
            $subCategory->update([
                'category_id' => $this->category_id,
                'name' => $this->name,
                'slug' => $this->slug,
                'icon' => $this->icon,
                'image' => $imagePath ?? $subCategory->image,
            ]);
            $this->dispatch('toastifySuccess', 'Sub-Category Updated Successfully!');
        } else {
            SubCategory::create([
                'category_id' => $this->category_id,
                'name' => $this->name,
                'slug' => $this->slug,
                'icon' => $this->icon,
                'image' => $imagePath,
            ]);
            $this->dispatch('toastifySuccess', 'Sub-Category Added Successfully!');
        }

        $this->resetForm();
    }

    public function editSubCategory($id)
    {
        $subCategory = SubCategory::findOrFail($id);

        $this->editMode = true;
        $this->editSubCategoryId = $subCategory->id;
        $this->category_id = $subCategory->category_id;
        $this->name = $subCategory->name;
        $this->slug = $subCategory->slug;
        $this->icon = $subCategory->icon;
    }

    public function deleteSubCategory($id)
    {
        SubCategory::findOrFail($id)->delete();
        $this->dispatch('toastifySuccess', 'Sub-Category Deleted Successfully!');
    }

    public function resetForm()
    {
        $this->reset(['category_id', 'name', 'slug', 'icon', 'image', 'editMode', 'editSubCategoryId']);
    }

    public function render()
    {
        return view('livewire.admin.category.subcategory');
    }
}
