<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class GuestController extends Controller
{
    public function index()
    {

        // $categories = Category::all()->map(function ($category) {
        //     $category->product_count = Product::where('category_id', $category->id)->count();
        //     return $category;
        // });

        $categories = Category::withCount('products')->get();

        return view('Pages.Frontend.home', compact('categories'));
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

    public function search()
    {
        return view('Pages.Frontend.search');
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
