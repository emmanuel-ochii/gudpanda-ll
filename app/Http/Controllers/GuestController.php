<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('Pages.home');
    }

    public function bid()
    {
        return view('Pages.bid');
    }

    public function contact()
    {
        return view('Pages.contact');
    }

    public function about()
    {
        return view('Pages.about');
    }

    public function shop()
    {
        return view('Pages.shop');
    }

    public function faq()
    {
        return view('Pages.faq');
    }

    public function becomeAGiver()
    {
        return view('Pages.become-a-giver');
    }

    public function whatWeDo()
    {
        return view('Pages.what-we-do');
    }

    public function JoinOurTeam()
    {
        return view('Pages.join-our-team');
    }
}
