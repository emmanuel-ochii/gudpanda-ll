<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Vendor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class VendorController extends Controller
{
    public function dashboard()
    {
        return view('Pages.Vendor.dashboard');
    }


    public function allItems()
    {
        $vendor = auth()->user()->vendor;

        // Check if the user is a vendor
        if (!$vendor) {
            return redirect()->back()->with('error', 'Unauthorized access');
        }

        $products = Product::with(['category', 'subcategory'])
            ->where('vendor_id', $vendor->id)
            ->get(); // Ensures Collection

        return view('Pages.Vendor.Products.all-items', compact('products'));
    }


    public function addItem()
    {
        return view('Pages.Vendor.add-item');
    }

    public function showItemDetails($id)
    {
        $product = Product::findOrFail($id);

        // $product->gallery_images = json_decode($product->product_gallery_images);

        $product->gallery_images = $product->product_gallery_images
            ? json_decode($product->product_gallery_images)
            : [];

        // dd($galleryImages);

        return view('Pages.Vendor.Products.show-item-details', compact('product'));
    }

    public function editItem(Product $product) // Route model binding
    {
        return view('Pages.Vendor.Products.edit-item', [
            'productId' => $product->id, // Explicitly passing productId
        ]);
    }

    public function deleteItem($id)
    {
        $product = Product::findOrFail($id);

        // Delete product images from storage
        if ($product->product_display_image) {
            Storage::delete('public/' . $product->product_display_image);
        }

        if ($product->product_gallery_images) {
            $galleryImages = json_decode($product->product_gallery_images, true);
            if (is_array($galleryImages)) {
                foreach ($galleryImages as $image) {
                    Storage::delete('public/' . $image);
                }
            }
        }

        // Delete product from the database
        $product->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

    public function orders()
    {
        return view('Pages.Vendor.Orders.order-overview');
    }

    public function coupons()
    {
        return view('Pages.Vendor.Coupons.coupon-overview');
    }

    public function couponManagement()
    {
        return view('Pages.Vendor.Coupons.couponManagement');
    }
}
