@extends('layouts.frontend')

@section('title', 'Become a Giver | Gudpanda')

@section('content')
<section class="page-header">
    <x-bg-page-header />
    <div class="container">
        <div class="page-header-content">
            <h1 class="title"> Empower Lives: Become a Giver Today </h1>
            <h4 class="sub-title">
                <span class="home">
                    <a href="/" wire:navigate>
                    <span>Home</span>
                    </a>
                </span>
                <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                <span class="inner">
                    <span>Become a Giver</span>
                </span>
            </h4>
        </div>
    </div>
</section>
<!-- ./ page-header -->


<section class="about-section pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-content">
                    <div class="section-heading">
                        <h2 class="section-title"> Our Giving Program </h2>
                        <p>
                            At Gudpanda, we believe in the power of generosity to create lasting change. As a giver, you have the opportunity to uplift communities, touch lives, and make a meaningful difference through our trusted platform. Whether you contribute by supporting small businesses, donating essentials, or offering unique services, Gudpanda provides the tools and visibility you need to leave a positive impact.
                        </p>
                    </div>
                    <div class="inline-block">
                        <p>
                            Becoming a giver with Gudpanda is easy and fulfilling. Here’s why joining us makes all the difference:
                        </p>
                    </div>
                    <div class="about-items">

                        <div class="about-item">
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                            Create Lasting Change
                        </div>
                        <div class="about-item">
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                            Convenient and Accessible
                        </div>
                        <div class="about-item">
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                            Be Part of a Movement
                        </div>
                        <div class="about-item">
                            <i class="fa-sharp fa-solid fa-circle-check"></i>
                            Feel Good, Do Good
                        </div>
                    </div>
                    <a href="{{route('vendor.register')}}" class="rr-primary-btn about-btn" wire:navigate> Get Started as a Vendor </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <img src="{{asset('guest/img/images/Vendor-page.jpg')}}" alt="about">
                    <div class="play-btn">
                        <a class="video-popup" data-autoplay="true" data-vbtype="video"
                            href="https://youtu.be/Dngwk0BBLmw?feature=shared">
                            <div class="play-btn">
                                <i class="fa-sharp fa-solid fa-play"></i>
                            </div>
                            <div class="ripple"></div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ./ about-section -->

@endsection
