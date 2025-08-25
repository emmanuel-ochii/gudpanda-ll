@extends('layouts.frontend')

@section('title', 'Something went wrong | Gudpanda')

@section('content')
<section class="page-header">
    <x-bg-page-header />
    <div class="container">
        <div class="page-header-content text-center">
            <h1 class="title text-danger">Oops! Something went wrong.</h1>
            <h4 class="sub-title">We’re already fixing it 🚧</h4>
        </div>
    </div>
</section>

{{-- <div class="error-500-page py-5">
    <div class="container text-center">
        <!-- 😢 Friendly Message -->
        <h2 class="mb-3">Our servers tripped up for a moment.</h2>
        <p class="lead mb-4">
            Don’t worry — your data is safe. While we sort things out, why not check out our latest products?
        </p>

        <!-- 🔗 Call-to-actions -->
        <div class="mb-5">
            <a href="{{ route('guest.shop') }}" class="btn btn-primary btn-lg me-2">
                🛒 Continue Shopping
            </a>
            <a href="/" class="btn btn-outline-secondary btn-lg">
                🏠 Go Home
            </a>
        </div>

        <!-- 🏆 Bestseller Recommendations -->
        <h3 class="mb-4">🔥 Our Bestsellers</h3>
        <div class="row justify-content-center">
            @foreach ($bestsellers ?? [] as $product)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="{{ asset('storage/' . $product->image) }}"
                             class="card-img-top"
                             alt="{{ $product->name }}">
                        <div class="card-body">
                            <h6 class="card-title">{{ $product->name }}</h6>
                            <p class="text-muted mb-2">₦{{ number_format($product->price, 2) }}</p>
                            <a href="{{ route('product.view', $product->slug) }}" class="btn btn-sm btn-outline-primary">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            @if(empty($bestsellers) || count($bestsellers) === 0)
                <p class="text-muted">No products to display right now.</p>
            @endif
        </div>
    </div>
</div> --}}
@endsection
