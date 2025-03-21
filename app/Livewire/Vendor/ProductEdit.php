<?php

namespace App\Livewire\Vendor;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class ProductEdit extends Component
{
    use WithFileUploads;

    public $productId, $category_id, $subcategory_id;
    public $categories, $subcategories;
    public $existingImage, $product_display_image;
    public $existingGallery = [], $product_gallery_images = [];
    public $name, $slug, $brand, $weight, $gender, $sku_number, $tags = [], $refundable;
    public $stock_status, $stock_quantity, $price, $discount_price, $description;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'nullable|exists:sub_categories,id',
            'brand' => 'nullable|string|max:255',
            'weight' => 'required|numeric|min:0',
            'gender' => 'required|in:Men,Women,Unisex',
            'description' => 'required|string',
            'sku_number' => [
                'required',
                'string',
                'max:255',
                Rule::unique('products', 'sku_number')->ignore($this->productId),
                'regex:/^[A-Z0-9\-]+$/',
            ],
            'stock_quantity' => 'required|integer|min:0',
            'stock_status' => 'required|in:in-stock,out-of-stock,pre-order',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:255',
            'refundable' => 'required|in:refundable,non-refundable',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'nullable|numeric|min:0',
            'product_display_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'product_gallery_images.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }

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
        $this->tags = json_decode($product->tags, true) ?? [];
        $this->refundable = $product->refundable;
        $this->price = $product->price;
        $this->discount_price = $product->discount_price;
        $this->existingImage = $product->product_display_image;
        // $this->existingGallery = json_decode($product->product_gallery_images, true) ?? [];
        $this->existingGallery = is_array($product->product_gallery_images)
            ? $product->product_gallery_images
            : json_decode($product->product_gallery_images, true) ?? [];

        // Preload categories & subcategories for efficiency
        $this->categories = Category::all();
        $this->subcategories = Subcategory::where('category_id', $this->category_id)->get();
    }

    public function updatedCategoryId()
    {
        $this->subcategories = Subcategory::where('category_id', $this->category_id)->get();
    }

    public function updateProduct()
    {
        $this->validate();

        $product = Product::findOrFail($this->productId);

        // Handle Product Display Image Upload
        if ($this->product_display_image) {
            // Delete old image
            if ($product->product_display_image) {
                Storage::disk('public')->delete($product->product_display_image);
            }
            // Store new image
            $imagePath = $this->product_display_image->store('products', 'public');
            $product->product_display_image = $imagePath;
        }

        // Handle Gallery Images Upload
        if (!empty($this->product_gallery_images)) {
            foreach ($this->product_gallery_images as $image) {
                $path = $image->store('product_gallery', 'public');
                $this->existingGallery[] = $path;
            }
            $product->product_gallery_images = json_encode($this->existingGallery);
        }

        // Update Product Details
        $product->update([
            'name' => $this->name,
            'category_id' => $this->category_id,
            'subcategory_id' => $this->subcategory_id,
            'brand' => $this->brand,
            'weight' => $this->weight,
            'gender' => $this->gender,
            'description' => $this->description,
            'sku_number' => strtoupper($this->sku_number),
            'stock_quantity' => $this->stock_quantity,
            'stock_status' => $this->stock_status,
            'tags' => json_encode($this->tags),
            'refundable' => $this->refundable,
            'price' => $this->price,
            'discount_price' => $this->discount_price,
        ]);

        session()->flash('success', 'Product updated successfully!');
    }

    public function removeGalleryImage($imagePath)
    {
        Storage::disk('public')->delete($imagePath);
        $this->existingGallery = array_values(array_filter($this->existingGallery, fn($image) => $image !== $imagePath));

        Product::where('id', $this->productId)->update(['product_gallery_images' => json_encode($this->existingGallery)]);
    }

    public function render()
    {
        return view('livewire.vendor.product-edit');
    }
}
