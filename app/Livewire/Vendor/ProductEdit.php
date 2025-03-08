<?php
namespace App\Livewire\Vendor;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class ProductEdit extends Component
{
    use WithFileUploads;

    public $productId;

    public $category;
    public $subcategory;

    public $name, $slug, $brand, $weight, $gender, $sku_number, $tags = [], $refundable = '';
    public $stock_status = '', $stock_quantity, $price, $discount_price, $description;

    // Validation rules
    protected $rules = [
        'name'                     => 'required|string|max:255',
        'slug'                     => 'required|string|max:255|unique:products,slug',
        'category_id'              => 'required|exists:categories,id',
        'subcategory_id'           => 'nullable|exists:sub_categories,id',
        'brand'                    => 'nullable|string|max:255',
        'weight'                   => 'required|numeric|min:0',
        'gender'                   => 'required|in:Men,Women,Unisex',
        'sku_number'               => 'nullable|numeric|max:255',
        'tags'                     => 'nullable|array',
        'tags.*'                   => 'string|max:255',
        'refundable'               => 'required|in:refundable,non-refundable',
        'product_display_image'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'product_gallery_images'   => 'nullable|array|max:5',              // Validate the array itself
        'product_gallery_images.*' => 'image|mimes:jpg,jpeg,png|max:2048', // Validate each image
        'stock_status'             => 'required|in:in-stock,out-of-stock,pre-order',
        'stock_quantity'           => 'nullable|numeric',
        'price'                    => 'required|numeric|min:0',
        'discount_price'           => 'nullable|numeric|min:0',
        'description'              => 'nullable|string',
    ];


    // Load the product data
    public function mount($productId)
    {
        $this->productId = $productId;
        $product = Product::findOrFail($productId);

        $this->name = $product->name;
        $this->price = $product->price;
        $this->description = $product->description;
        $this->category = $product->category_id;
        $this->subcategory = $product->subcategory_id;
    }

    // Save updated product data
    public function save()
    {
        $this->validate();

        $product = Product::findOrFail($this->productId);
        $product->update([
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category,
            'subcategory_id' => $this->subcategory,
        ]);

        session()->flash('success', 'Product updated successfully!');
    }
    public function render()
    {
        return view('livewire.vendor.product-edit', [
            'categories' => Category::all(),
            'subcategories' => Subcategory::all(),
        ]);
    }
}
