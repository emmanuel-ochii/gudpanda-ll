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
@endsection
