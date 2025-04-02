@extends('layouts.frontend')

@section('title', $category->name . ' - Products')

@section('content')
    <section class="page-header">
        <x-bg-page-header />

        <div class="container">
            <div class="page-header-content">
                <h1 class="title"> {{ $category->name }} </h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="{{ route('guest.shop') }}">
                            <span> Shop </span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span> {{ $category->name }}</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="shop-grid-2 pt-100 pb-100">
        <div class="container">
            {{-- <div class="row gy-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="assets/img/shop/shop-1.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">Monica Diara Party Dress</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">$250.00</span>$157.00</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row gy-4">
                @forelse ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="shop-item">
                            <div class="shop-thumb">
                                <div class="overlay"></div>
                                <img src="{{ asset('storage/' . $product->product_display_image) }}"
                                    alt="{{ $product->name }}">
                                @if ($product->is_new)
                                    <span class="sale">New</span>
                                @endif
                                <ul class="shop-list">
                                    <li>
                                        {{-- <a href="{{ route('cart.add', $product->id) }}"> --}}
                                            <i
                                                class="fa-regular fa-cart-shopping"></i></a></li>
                                    <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                    <li>
                                        <a href="{{ route('product.details', ['category' => $category->slug, 'product_name' => $product->slug]) }}">
                                            <i class="fa-light fa-eye"></i>
                                        </a><i
                                                class="fa-light fa-eye"></i> </a> </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <span class="category">{{ $product->category->name }}</span>
                                <h3 class="title">
                                    {{-- <a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a> --}}
                                    <a href="{{ route('product.details', ['category' => $category->slug, 'product_name' => $product->slug]) }}">
                                        {{ $product->name }}
                                    </a>
                                </h3>
                                <div class="review-wrap">
                                    <ul class="review">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <li>
                                                <i class="fa-solid fa-star {{ $i <= $product->rating ? '' : 'text-muted' }}"></i>
                                            </li>
                                        @endfor
                                    </ul>
                                    <span>({{ $product->reviews_count }} Reviews)</span>
                                </div>
                                <span class="price">
                                    @if ($product->discount_price)
                                        <span class="offer">₦{{ number_format($product->price, 2) }}</span>
                                       ₦{{ number_format($product->discount_price, 2) }}
                                    @else
                                       ₦{{ number_format($product->price, 2) }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center w-100">No products found in this category.</p>
                @endforelse
            </div>

            {{-- <ul class="pagination-wrap justify-content-center mt-50">
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa-regular fa-chevrons-right"></i></a></li>
            </ul> --}}
            <!-- Pagination -->
        <div class="pagination-wrap justify-content-center mt-50">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
        </div>
    </section>
    <!-- ./ shop-grid -->


@endsection
