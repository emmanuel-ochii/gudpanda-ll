@extends('layouts.frontend')

@section('title', 'Shop | Gudpanda')

@section('content')
    <section class="page-header">
        <x-bg-page-header />

        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Shop</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="{{ route('guest.home') }}">
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Shop</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="shop-grid-2 pt-100 pb-100">
        <div class="container">
            <div class="row gy-4">
                @forelse ($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="shop-item">
                            <div class="shop-thumb">
                                <div class="overlay"></div>
                                <img src="{{ asset('storage/' . $product->product_display_image) }}"
                                    alt="{{ $product->name }}">
                                <span class="sale">New</span>

                                <ul class="shop-list">
                                    <li>

                                          @livewire('add-to-cart', ['productId' => $product->id, 'show' => 'icon'], key('icon-'.$product->id))
                                          
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa-light fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <!-- Eye icon linking to product detail page -->
                                        <a
                                            href="{{ route('product.details', [$product->category->slug, $product->slug]) }}">
                                            <i class="fa-light fa-eye"></i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="shop-content">
                                <span class="category">{{ $product->category->name }}</span>
                                <h3 class="title" title="{{ $product->name }}">
                                    <a href="{{ route('product.details', [$product->category->slug, $product->slug]) }}">
                                        {{-- {{ $product->name }} --}}
                                        {{ \Illuminate\Support\Str::limit($product->name, 50) }}
                                    </a>
                                </h3>
                                <div class="review-wrap">
                                    <ul class="review">
                                        @for ($i = 0; $i < 5; $i++)
                                            <li>
                                                <i
                                                    class="fa-solid fa-star {{ $i < $product->rating ? 'text-warning' : '' }}"></i>
                                            </li>
                                        @endfor
                                    </ul>
                                    <span>({{ $product->reviews_count ?? 0 }} Reviews)</span>
                                </div>
                                <span class="price">
                                    @if ($product->discount_price)
                                        <span class="offer">₦{{ number_format($product->discount_price, 2) }}</span>
                                        ₦{{ number_format($product->price, 2) }}
                                    @else
                                        ₦{{ number_format($product->price, 2) }}
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p class="alert alert-warning">No products available in the shop at the moment.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <ul class="pagination-wrap justify-content-center mt-50">
                {{-- {{ $products->links() }} --}}

                {{ $products->links('components.pagination.default') }}

            </ul>
        </div>

    </section>
    <!-- ./ shop-grid -->
@endsection
