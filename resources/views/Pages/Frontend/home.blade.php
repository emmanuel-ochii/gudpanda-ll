@extends('layouts.frontend')

@section('title', 'Welcome Gudpanda')

@section('content')


    <section class="hero-section-2 pt-60">
        <div class="container">
            <div class="row gy-lg-0 gy-4 justify-content-center">

                <div class="col-lg-3 col-md-4">
                    <div class="hero-list-wrap">
                        <ul class="hero-list">
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i>Breakfast & Dairy</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i> Meat & Fish</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i> Fresh Fruit</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i> Fresh Vegetables</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i> Dairy Eggs</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i> Milk & Cream</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i> Bread & Bakery</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa-regular fa-plus"></i> Grocery</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 col-md-8">
                    <div class="hero-item" data-background="{{ asset('guest/img/bg-img/hero-item-bg.png') }}">
                        <div class="product-overlay"></div>
                        <div class="hero-item-content">
                            <span class="sub-title">Get up to 30% off on your first ₦150 purchase</span>
                            <h3 class="title">Organic Grocery <span>₦69.00</span></h3>
                            <a href="/" class="rr-primary-btn"
                                style="background-color: var(--rr-color-theme-primary)">
                                Shop Now <i class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5">
                    <div class="discount-item food-discount hero-discount"
                        data-background="{{ asset('guest/img/images/hero-discount.png') }}">
                        <div class="content">
                            <span class="offer"> -45 % Offer</span>
                            <h3 class="title">
                                With us, you will never miss <span> any ingredient</span>
                            </h3>
                            <a href="#" class="shop-btn"><i class="fa-solid fa-plus"></i>Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ./ Category name, image, and count -->
    <section class="food-section pt-60 pb-60">
        <div class="container">
            <div class="row food-wrap gy-lg-0 gy-4 justify-content-center">

                @foreach ($categories as $category)
                    <div class="col-lg-2 col-md-4">
                        <div class="food-item text-center">
                            <a href="{{ route('guest.categoryProducts', $category->slug) }}" class="category-link">
                                <div class="food-img">
                                    <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
                                </div>
                                <h3 class="title">
                                    {{ $category->name }}
                                    <span>{{ $category->products_count }} Items</span>
                                </h3>
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ./ food-section -->

    <!-- ./ Weekend discount -->
    <section class="discount-section overflow-hidden pb-100">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-lg-6">
                    <div class="discount-item food-discount" style="--rr-color-theme-primary: #E53E3E">
                        <div class="content">
                            <span>Weekend Discount</span>
                            <h3 class="title">Feed The Best Energy <br>Drink Booster</h3>
                            <p>Just don’t miss the special offer this week</p>
                            <a href="#"><i class="fa-regular fa-plus"></i>Shop Now</a>
                        </div>
                        <div class="men">
                            <img src="{{ asset('guest/img/images/food-discount-1.png') }}" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="discount-item food-discount food-discount-2" style="--rr-color-theme-primary: #E53E3E">
                        <div class="content">
                            <span>Weekend Discount</span>
                            <h3 class="title">Our Garden Fresh <br>Vegetables</h3>
                            <p>Just don’t miss the special offer this week</p>
                            <a href="#"><i class="fa-regular fa-plus"></i>Shop Now</a>
                        </div>
                        <div class="men">
                            <img src="{{ asset('guest/img/images/food-discount-2.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ discount-section -->

    <!-- ./ Deal of the week listing -->
    <section class="deal-section pb-60">
        <div class="container">
            <div class="row product-item-wrap gy-xl-0 gy-4 justify-content-center">
                <div class="section-heading">
                    <h2 class="section-title">Deal of the Week</h2>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="{{ asset('guest/img/product/product-1.png') }}" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="#">Hillshire Farm Thin Sliced Honey Deli Lunch
                                    Meat</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">₦257.00 <span class="offer">₦450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="{{ asset('guest/img/product/product-2.png') }}" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="#">Greek Gods Probiotic Plain Traditional</a>
                            </h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">₦150.00 <span class="offer">₦100.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="item-wrap">
                        <div class="discount-item food-discount">
                            <div class="content">
                                <span>-45 % Offer</span>
                                <h3 class="title">Make your grocery <br>shopping easy with us</h3>
                                <p>Feed your family the best</p>
                            </div>
                            <div class="men">
                                <img src="{{ asset('guest/img/images/food-discount-3.png') }}" alt="img">
                            </div>
                        </div>
                        <div class="discount-item food-discount" style="--rr-color-theme-primary: #67B02E">
                            <div class="content">
                                <span>-45 % Offer</span>
                                <h3 class="title">Make your grocery <br>shopping easy with us</h3>
                                <p>Feed your family the best</p>
                            </div>
                            <div class="men">
                                <img src="{{ asset('guest/img/images/food-discount-4.png') }}" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="{{ asset('guest/img/product/product-3.png') }}" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="#">True Lemon Raspberry Natural Juice</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">₦257.00 <span class="offer">₦450.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="{{ asset('guest/img/product/product-4.png') }}" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="#">Annies Organic Cheddar
                                    Snack Mix</a></h3>
                            <h4 class="quantity">9 oz Pack</h4>
                            <span class="price">₦177.00 <span class="offer">₦75.00</span></span>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ deal-section -->

    <div class="discount-cta mb-60">
        <div class="container p-0">
            <div class="discount-cta-wrap text-center pt-35 pb-35"
                style="background-image: url('{{ asset('guest/img/bg-img/discount-cta-bg.jpg') }}');">
                <span>Super discount for your ₦{{ number_format(10000) }} purchase. Use this code
                    <strong>OFFER1000</strong></span>
            </div>

        </div>
    </div>
    <!-- ./ discount-cta -->

    <section class="popular-product bg-grey pb-60 pt-60">
        <div class="container">
            <div class="product-top-content heading-space mb-25">
                <div class="section-heading mb-0 heading-2">
                    <h2 class="section-title">Popular Products</h2>
                </div>
                <!-- Dynamic Category Filters -->
                <ul class="project-filter text-center">
                    <li class="active" data-filter="*">Show All</li>
                    @foreach ($categories as $category)
                        <li data-filter=".{{ Str::slug($category->name) }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="row gx-3 gy-4 filter-items">
                @foreach ($products as $product)
                    <div class="col-xl-2 col-lg-3 col-md-6 single-item {{ Str::slug($product->category->name) }}">
                        <div class="product-item product-item-2">

                            <div class="product-thumb">
                                <img src="{{ asset('storage/' . $product->product_display_image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="product-content">
                                <span class="category">{{ $product->category->name }}</span>
                                <h3 class="title">
                                    <a
                                        href="{{ route('product.details', ['category' => $product->category->slug, 'product_name' => $product->slug]) }}">
                                        {{ \Illuminate\Support\Str::limit($product->name, 23) }}
                                    </a>
                                </h3>
                                <span class="price">₦{{ number_format($product->discount_price, 2) }}
                                    <span class="offer">₦{{ number_format($product->price, 2) }}</span>
                                </span>
                            </div>
                            <div class="product-bottom">
                                @livewire('add-to-cart', ['productId' => $product->id, 'show' => 'text'], key('text-'.$product->id))

                                {{-- @livewire('add-to-cart', ['productId' => $product->id], key($product->id)) --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ./ popular-product -->

    {{-- Available bids --}}
    {{-- <section class="product-deal bg-grey pb-60">
        <div class="container">
            <div class="section-heading heading-2 mb-40">
                <h2 class="section-title mb-0"> Available Bids </h2>
            </div>
            <div class="row gy-lg-0 gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-1.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-2.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3 mb-0">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-3.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-item large-item">
                        <ul class="product-list">
                            <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a></li>
                            <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                        </ul>
                        <div class="product-thumb">
                            <img src="assets/img/product/product-deal-4.png" alt="img">
                        </div>
                        <div class="product-content">
                            <span class="category">Nescafe USA</span>
                            <h3 class="title"><a href="shop-details.html">Peysan Mozzarella Italian Cuisine</a></h3>
                            <h4 class="quantity">500g Pack</h4>
                            <span class="price">$150.00 <span class="offer">$100.00</span></span>
                            <p>Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class
                                aptent taciti sociosqu ad litora torquent Vivamus adipiscing nisl.</p>
                        </div>
                        <div class="product-bottom">
                            <span class="stock">In Stock</span>
                            <div class="line"></div>
                            <span class="number">Available: <span>250</span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-1.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-2.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-item product-item-2 product-item-3 mb-0">
                        <div class="time"><span>Delivery 9 MINS</span></div>
                        <div class="product-left">
                            <div class="product-thumb">
                                <img src="assets/img/product/product-deal-3.png" alt="img">
                            </div>
                            <div class="rr-product-countdown" data-countdown data-date="Jun 30 2024 20:20:22">
                                <div class="rr-product-countdown-inner">
                                    <ul>
                                        <li><span data-days>0</span>d</li>
                                        <li><span data-hours>0</span>h</li>
                                        <li><span data-minutes>0</span>m</li>
                                        <li><span data-seconds>0</span>s</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-right">
                            <div class="product-content">
                                <span class="category">Nescafe USA</span>
                                <h3 class="title"><a href="shop-details.html">Aptamil Gold+ Premium
                                        Ifant Formula</a></h3>
                                <h4 class="quantity">500kg</h4>
                                <span class="price">$36.00 <span class="offer">$45.00</span></span>
                            </div>
                            <div class="product-bottom">
                                <a href="cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ./ product-deal -->

    {{-- <section class="product-tab-section pt-60 pb-60">
        <div class="container">
            <div class="row product-tab-wrap justify-content-center gy-lg-0 gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="discount-item-wrap">
                        <div class="discount-item food-discount">
                            <div class="content">
                                <span>-45 % Offer</span>
                                <h3 class="title">With us, you will never <br> miss <span> any ingredient</span></h3>
                                <a href="shop.html"><i class="fa-solid fa-plus"></i>Shop Now</a>
                            </div>
                            <div class="discount-img">
                                <img src="assets/img/bg-img/product-item-bg.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="product-tab-wrapper">
                        <div class="tab-top heading-space">
                            <div class="section-heading heading-2 mb-0">
                                <h2 class="section-title mb-0">Popular Products</h2>
                            </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">New Sale</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">On Sale</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab"
                                        data-bs-target="#contact" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Best Rated</button>
                                </li>
                            </ul>
                        </div>
                        <div class="product-tab">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row gy-xl-0 gy-4">
                                        <div class="col-xl-3 col-md-6 single-item veg tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-1.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin
                                                            Sliced Honey Deli Lunch Meat</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item pet cake">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-2.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Nerds Gummy Clusters
                                                            Tangy Crunchy</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item veg pet">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-3.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Mango Punch Tamplco
                                                            Drink Mixer</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item cake tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-4.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Foster Farms Breast
                                                            <br>
                                                            Nuggets</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row gy-xl-0 gy-4">
                                        <div class="col-xl-3 col-md-6 single-item veg tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-1.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin
                                                            Sliced Honey Deli Lunch Meat</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item pet cake">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-2.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Nerds Gummy Clusters
                                                            Tangy Crunchy</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item veg pet">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-3.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Mango Punch Tamplco
                                                            Drink Mixer</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item cake tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-4.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Foster Farms Breast
                                                            <br>
                                                            Nuggets</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="row gy-xl-0 gy-4">
                                        <div class="col-xl-3 col-md-6 single-item veg tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-1.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Hillshire Farm Thin
                                                            Sliced Honey Deli Lunch Meat</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item pet cake">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-2.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Nerds Gummy Clusters
                                                            Tangy Crunchy</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item veg pet">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-3.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Mango Punch Tamplco
                                                            Drink Mixer</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-md-6 single-item cake tea">
                                            <div class="product-item product-item-2">
                                                <div class="time"><span>Delivery 9 MINS</span></div>
                                                <ul class="product-list">
                                                    <li><a href="#"><i class="fa-sharp fa-regular fa-plus"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa-regular fa-heart"></i></a></li>
                                                    <li><a href="#"><i
                                                                class="fa-solid fa-arrow-right-arrow-left"></i></a></li>
                                                </ul>
                                                <div class="product-thumb">
                                                    <img src="assets/img/product/popular-4.png" alt="img">
                                                </div>
                                                <div class="product-content">
                                                    <span class="category">Nescafe USA</span>
                                                    <h3 class="title"><a href="shop-details.html">Foster Farms Breast
                                                            <br>
                                                            Nuggets</a></h3>
                                                    <h4 class="quantity">9 oz Pack</h4>
                                                    <span class="price">$257.00 <span
                                                            class="offer">$450.00</span></span>
                                                </div>
                                                <div class="product-bottom">
                                                    <a href="cart.html">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ./ product-tab-section -->

@endsection
