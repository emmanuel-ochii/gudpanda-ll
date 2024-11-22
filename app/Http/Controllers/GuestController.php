<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('Pages.Frontend.home');
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

    public function whatWeDo()
    {
        return view('Pages.Frontend.what-we-do');
    }

    public function JoinOurTeam()
    {
        return view('Pages.Frontend.join-our-team');
    }
}
