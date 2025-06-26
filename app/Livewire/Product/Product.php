<?php
namespace App\Livewire\Product;

use App\Models\Product as ProductModel;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;

class Product extends Component
{
    use WithFileUploads;

    public $categories;
    public $subcategories = []; // Subcategories for the selected category

    // public $categories = [];
    // public $subcategories = [];
    // public $selectedCategory = null;
    // public $selectedSubcategory = null;
    public $category_id;
    public $subcategory_id;

    public $name, $slug, $brand, $weight, $gender, $sku_number, $tags = [], $refundable = '';
    public $product_display_image, $product_gallery_images = [];
    public $stock_status = '', $stock_quantity, $price, $discount_price, $description;


    public function mount()
    {
        $this->categories = Category::all(); // Fetch all categories
        $this->subcategories = SubCategory::all();

    }

    public function removeUploadedFile($filename)
    {
        $path = storage_path("app/public/products/gallery/{$filename}");
        if (file_exists($path)) {
            unlink($path);
        }

        $this->product_gallery_images = array_filter($this->product_gallery_images, function ($file) use ($filename) {
            return $file !== $filename;
        });
    }


    public function updatedName()
    {
        $this->slug = Str::slug($this->name);
    }

    // public function updatedSelectedCategory($categoryId)
    // {
    //     $this->subcategories = Subcategory::where('category_id', $categoryId)->get(); // Fetch related subcategories
    //     $this->selectedSubcategory = null; // Reset selected subcategory
    // }

    // public function updatedCategoryId($value)
    // {
    //     // Log::info('Category ID updated to: ' . $this->category_id);
    //     // dd($this->category_id);

    //     // Reset subcategory when category changes
    //     $this->subcategory_id = null;

    //     // Load subcategories for the selected category
    //     // $this->subcategories = SubCategory::where('category_id', $this->category_id)->get();

    //     $this->subcategories = SubCategory::where('category_id', $value)->get();

    //     // dd($this->subcategories); // Debugging
    // }

    // public function removeUploadedFile($filename)
    // {
    //     $path = storage_path("app/public/products/gallery/{$filename}");
    //     if (file_exists($path)) {
    //         unlink($path);
    //     }

    //     $this->product_gallery_images = array_filter($this->product_gallery_images, function ($file) use ($filename) {
    //         return $file !== $filename;
    //     });
    // }


    public function saveProduct()
    {

        $this->validate([
            'name'                     => 'required|string|max:255',
            'slug'                     => 'required|string|max:255|unique:products,slug',
            'category_id'              => 'required|exists:categories,id',
            'subcategory_id'           => 'nullable|exists:sub_categories,id',
            'brand'                    => 'nullable|string|max:255',
            'weight'                   => 'required|numeric|min:0',
            'gender'                   => 'required|in:Men,Women,Unisex',
            'sku_number'               => 'nullable|string|max:255|unique:products,sku_number|regex:/^[A-Z0-9\-]+$/',
            'tags'                     => 'nullable|array',
            'tags.*'                   => 'string|max:255',
            'refundable'               => 'required|in:refundable,non-refundable',
            'product_display_image'    => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'product_gallery_images'   => 'nullable|array|max:5',              // Validate the array itself
            'product_gallery_images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048', // Validate each image
            'stock_status'             => 'required|in:in-stock,out-of-stock,pre-order',
            'stock_quantity'           => 'nullable|numeric',
            'price'                    => 'required|numeric|min:0',
            'discount_price'           => 'nullable|numeric|min:0',
            'description'              => 'nullable|string',
        ]);

        try {
            $displayImagePath = $this->product_display_image
            ? $this->product_display_image->store('products', 'public')
            : null;

            $galleryImagePaths = [];
            foreach ($this->product_gallery_images as $image) {
                $galleryImagePaths[] = $image->store('products/gallery', 'public');
            }

            ProductModel::create([
                'name'                   => $this->name,
                'slug'                   => $this->slug,
                'category_id'            => $this->category_id,
                'subcategory_id'         => $this->subcategory_id,
                'brand'                  => $this->brand,
                'weight'                 => $this->weight,
                'gender'                 => $this->gender,
                'sku_number'             => $this->sku_number,
                'tags'                   => json_encode($this->tags),
                'refundable'             => $this->refundable,
                'product_display_image'  => $displayImagePath,
                'product_gallery_images' => json_encode($galleryImagePaths),
                'stock_status'           => $this->stock_status,
                'stock_quantity'         => $this->stock_quantity,
                'price'                  => $this->price,
                'discount_price'         => $this->discount_price,
                'description'            => $this->description,
                'vendor_id'              => auth()->user()->vendor->id ?? null,
                'user_id'                => auth()->check() ? auth()->id() : null,
            ]);

            session()->flash('success', 'Product added successfully!');

            $this->reset(['name', 'slug', 'category_id', 'subcategory_id', 'brand', 'weight', 'gender', 'sku_number', 'tags', 'refundable', 'product_display_image', 'product_gallery_images', 'stock_status', 'stock_quantity', 'price', 'discount_price', 'description']);

        } catch (\Exception $e) {

            session()->flash('error', 'An error occurred while saving the product. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.product.product', [
            // 'categories'    => Category::all(),
            // 'subcategories' => SubCategory::all(),
        ]);
    }
}
