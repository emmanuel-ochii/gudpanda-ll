<?php

namespace App\Livewire\Vendor;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ProductEdit extends Component
{
    use WithFileUploads;

    public $productId, $category_id, $subcategory_id;
    public $categories, $subcategories;

    public $category;
    public $subcategory;
    public $existingImage;
    public $product_gallery_images = [];
    public $existingGallery = [];

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
        $product = Product::findOrFail($productId);

        $this->productId = $product->id;
        $this->name = $product->name;
        $this->category_id = $product->category_id;
        $this->subcategory_id = $product->subcategory_id;
        $this->brand = $product->brand;
        $this->weight = $product->weight;
        $this->gender = $product->gender;
        $this->description = $product->description;
        $this->sku_number = $product->sku_number;
        $this->stock_quantity = $product->stock_quantity;
        $this->stock_status = $product->stock_status;
        $this->tags = $product->tags;
        $this->refundable = $product->refundable;
        $this->price = $product->price;
        $this->discount_price = $product->discount_price;
        $this->existingImage = $product->product_display_image;
        $this->existingGallery = json_decode($product->product_gallery_images, true) ?? []; // Assuming 'product_gallery_images' is a JSON field

        $this->categories = Category::all();
        $this->subcategories = Subcategory::where('category_id', $this->category_id)->get();
    }

    // Save updated product data
    // public function save()
    // {
    //     $this->validate();

    //     $product = Product::findOrFail($this->productId);
    //     $product->update([
    //         'name' => $this->name,
    //         'price' => $this->price,
    //         'description' => $this->description,
    //         'category_id' => $this->category,
    //         'subcategory_id' => $this->subcategory,
    //     ]);

    //     session()->flash('success', 'Product updated successfully!');
    // }
    public function updateProduct()
    {
        $product = Product::findOrFail($this->productId);

        $this->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required',
            'subcategory_id' => 'nullable',
            'brand' => 'nullable|string|max:255',
            'weight' => 'nullable|string|max:255',
            'gender' => 'nullable|string',
            'description' => 'required|string',
            'sku_number' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products', 'sku_number')->ignore($this->productId), // Ignore current product
                'regex:/^[A-Z0-9\-]+$/',
            ],
            'stock_quantity' => 'required|integer',
            'stock_status' => 'required|string',
            'tags' => 'nullable|string',
            'tags.*' => 'string|max:255',
            'refundable' => 'required|string',
            'price' => 'required|numeric',
            'discount_price' => 'nullable|numeric',
            'product_display_image' => 'nullable|image|max:2048', // 2MB Max
            'product_gallery_images.*' => 'nullable|image|max:2048',
        ]);

        $product->update([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'brand' => $this->brand,
            'weight' => $this->weight,
            'gender' => $this->gender,
            'description' => $this->description,
            'sku_number' => $this->sku_number = strtoupper($this->sku_number),
            'stock_quantity' => $this->stock_quantity,
            'stock_status' => $this->stock_status,
            'tags' => $this->tags,
            'refundable' => $this->refundable,
            'price' => $this->price,
            'discount_price' => $this->discount_price,
        ]);

        session()->flash('success', 'Product updated successfully!');
    }


    public function removeGalleryImage($imagePath)
    {
        // Remove the file from storage
        Storage::disk('public')->delete($imagePath);

        // Remove image from gallery array
        $this->existingGallery = array_filter($this->existingGallery, function ($image) use ($imagePath) {
            return $image !== $imagePath;
        });

        // Update product record
        $product = Product::findOrFail($this->productId);
        $product->gallery_images = json_encode(array_values($this->existingGallery));
        $product->save();
    }

    public function render()
    {
        return view('livewire.vendor.product-edit', [
            'categories' => Category::all(),
            'subcategories' => Subcategory::all(),
        ]);
    }
}
