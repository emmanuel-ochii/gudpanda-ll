@extends('layouts.frontend')

@section('title', 'Page Not Found | Gudpanda')

@section('content')
    <div class="error-page py-5">
        <div class="container text-center">
            <h1 class="display-3 text-danger">404</h1>
            <h2 class="mb-3">Oops! Page not found.</h2>
            <p class="lead mb-4">
                The page you’re looking for doesn’t exist. Try searching or explore our featured products.
            </p>

            <!-- 🔎 Search Form -->
            <form action="{{ route('guest.search') }}" method="GET" class="mb-5">
                <div class="input-group input-group-lg w-50 mx-auto">
                    <input type="text" name="q" class="form-control" placeholder="Search products...">
                    <button type="submit" class="btn btn-danger">Search</button>
                </div>
            </form>

            <!-- 🛒 Featured Products -->
            <h3 class="mb-4">Trending Products</h3>
            <div class="row justify-content-center">
                @php
                    $inStockProducts = \App\Models\Product::where('stock_status', '=', 'in-stock')->take(4)->get();
                @endphp

                @forelse($inStockProducts as $product)
                    <div class="col-md-3 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="{{ asset('storage/' . $product->product_display_image) }}"
                                    alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-dark fw-bold">
                                    ₦{{ number_format($product->price, 2) }}
                                </p>
                                <a href="{{ route('product.details', [$product->category->slug, $product->slug]) }}" class="btn btn-outline-dark w-100">
                                    View Product
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No featured products yet.</p>
                @endforelse
            </div>

            <!-- CTA Buttons -->
            <div class="mt-4">
                <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
                <a href="{{ route('guest.shop') }}" class="btn btn-danger">Shop Now</a>
            </div>
        </div>
    </div>
@endsection
