<?php
namespace App\Http\Controllers;

use App\Models\Product;

class VendorController extends Controller
{
    public function dashboard()
    {
        return view('Pages.Vendor.dashboard');
    }

    public function allItems()
    {
        $products = Product::with(['category', 'subcategory'])->get();

        return view('Pages.Vendor.Products.all-items', compact('products'));

    }

    public function addItem()
    {
        return view('Pages.Vendor.add-item');
    }

    public function itemDetails()
    {
        return view('Pages.Vendor.Products.show-item-details');
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
