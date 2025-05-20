@extends('layouts.frontend')

@section('title', 'Vendor | Gudpanda')

@section('content')
    <section class="page-header">
        <x-bg-page-header />
        <div class="container">
            <div class="page-header-content">
                <h1 class="title"> Become A Vendor</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/" wire:navigate>
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Vendor</span>
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
                            <h2 class="section-title"> Our Vendor Program </h2>
                            <p>
                                At Gudpanda, we empower businesses like yours to reach a broader audience and maximize sales
                                through our trusted e-commerce platform. Whether you sell unique handmade crafts,
                                cutting-edge electronics, or everyday essentials, Gudpanda gives you the tools and
                                visibility you need to succeed in today’s competitive market.
                            </p>
                        </div>
                        <div class="inline-block">
                            <p>
                                Joining Gudpanda as a vendor is simple and rewarding. Here’s why you should partner with us:
                            </p>
                        </div>
                        <div class="about-items">

                            <div class="about-item">
                                <i class="fa-sharp fa-solid fa-circle-check"></i>
                                Reach a Wider Audience
                            </div>
                            <div class="about-item">
                                <i class="fa-sharp fa-solid fa-circle-check"></i>
                                Fast and Reliable Logistics
                            </div>
                            <div class="about-item">
                                <i class="fa-sharp fa-solid fa-circle-check"></i>
                                Seamless Vendor Support
                            </div>
                            <div class="about-item">
                                <i class="fa-sharp fa-solid fa-circle-check"></i>
                                Powerful Marketing and Insights
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
