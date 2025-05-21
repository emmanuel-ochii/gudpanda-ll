<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class GuestController extends Controller
{
    public function index()
    {
        $categories = Category::whereHas('products')->withCount('products')->get();

        // Fetch latest active products (limit for performance)
        // $products = Product::where('status', 'active')->latest()->take(12)->get();
        $products = Product::with('category')->latest()
            ->take(12)
            ->get();

        return view('Pages.Frontend.home', compact('categories', 'products'));
    }

    public function categoryProducts($slug)
    {
        // Find category by slug for better SEO
        $category = Category::where('slug', $slug)->firstOrFail();

        // Fetch only active products for optimization
        $products = $category->products()->paginate(12);

        return view('Pages.Frontend.product-category', compact('category', 'products'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Search in products by name, tags, or category name
        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('tags', 'LIKE', "%{$query}%")
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->get();

        // Optional Optimization for Query
        // If your product listing grows, consider paginating:
        // $products = Product::with('category')
        //     ->where('name', 'LIKE', "%{$query}%")
        //     ->orWhere('tags', 'LIKE', "%{$query}%")
        //     ->orWhereHas('category', function ($q) use ($query) {
        //         $q->where('name', 'LIKE', "%{$query}%");
        //     })
        //     ->paginate(12);

        return view('Pages.Frontend.search', compact('products', 'query'));
    }

    public function showItem($categorySlug, $productName)
    {
        // Find the category by its slug
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        // Find the product by its name and make sure it belongs to the correct category
        $product = $category->products()->where('slug', $productName)->firstOrFail();

        return view('Pages.Frontend.product-details', compact('product'));
    }

    public function bid()
    {
        return view('Pages.Frontend.bid');
    }

    public function contact()
    {
        return view('Pages.Frontend.contact');
    }

    public function about()
    {
        return view('Pages.Frontend.about');
    }

    public function shop()
    {
        // Fetch all active products with their category and paginate for performance
        $products = Product::with('category')
            ->latest()
            ->paginate(12);

        return view('Pages.Frontend.shop', compact('products'));
    }

    public function myCart()
    {
        return view('Pages.Frontend.my-cart');
    }

    public function checkout()
    {
        return view('Pages.Frontend.checkout');
    }

    public function faq()
    {
        return view('Pages.Frontend.faq');
    }

    public function becomeAGiver()
    {
        return view('Pages.Frontend.become-a-giver');
    }

    public function becomeAVendor()
    {
        return view('Pages.Frontend.become-a-vendor');
    }

    public function whatWeDo()
    {
        return view('Pages.Frontend.what-we-do');
    }

    public function JoinOurTeam()
    {
        return view('Pages.Frontend.join-our-team');
    }
}
