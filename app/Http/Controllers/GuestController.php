<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class GuestController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('products')->get();

        return view('Pages.Frontend.home', compact('categories'));
    }

    public function categoryProducts($id)
    {
        $category = Category::with('products')->findOrFail($id);
        $products = $category->products; // Fetch products in this category

        return view('Pages.Frontend.category-products', compact('category', 'products'));
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

        return view('Pages.Frontend.search', compact('products', 'query'));
    }
    public function showItem($id)
{
    $product = Product::with('category')->findOrFail($id);
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
        return view('Pages.Frontend.shop');
    }

    // public function search()
    // {
    //     return view('Pages.Frontend.search');
    // }

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
