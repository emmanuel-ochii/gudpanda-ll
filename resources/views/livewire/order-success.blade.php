@extends('layouts.frontend')

@section('title', 'Order success | Gudpanda')

@section('content')
    <section class="page-header no-print"> {{-- Hide header on print --}}
        <x-bg-page-header />
        <div class="container">
            <div class="page-header-content">
                <h1 class="title"> Cart </h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/" wire:navigate>
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Cart</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <div class="order-success-page py-5">
        <div class="container">
            {{-- Invoice Header --}}
            <div class="invoice-header text-center mb-5">
                <img src="{{ asset('guest/img/logo/logo-3.png') }}" alt="Gudpanda Logo" height="60" width="150">
                <h2 class="mt-2">Gudpanda Services</h2>
                <p>Email: support@gudpanda.com | Phone: +234 800 000 0000</p>
                <p>Address: Lagos, Nigeria</p>
                <hr>
                <h3 class="text-success">Order Invoice</h3>
                <p>Order #<strong>{{ $order->id }}</strong> | Date: {{ $order->created_at->format('F d, Y h:i A')}}</p>
                <p>Status: <strong class="text-primary">{{ ucfirst($order->status) }}</strong></p>
            </div>

            <div class="row">
                {{-- Billing Details --}}
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-3">Billing Details</h4>
                    <div class="card p-3">
                        <p><strong>Name:</strong> {{ $order->first_name }} {{ $order->last_name }}</p>
                        <p><strong>Email:</strong> {{ $order->email }}</p>
                        <p><strong>Phone:</strong> {{ $order->phone }}</p>
                        <p><strong>Address:</strong> {{ $order->address1 }} {{ $order->address2 }}, {{ $order->city }},
                            {{ $order->state }}, {{ $order->zip }}, {{ $order->country }}</p>
                        @if ($order->company)
                            <p><strong>Company:</strong> {{ $order->company }}</p>
                        @endif
                        @if ($order->notes)
                            <p><strong>Order Notes:</strong> {{ $order->notes }}</p>
                        @endif
                    </div>
                </div>

                {{-- Order Summary --}}
                <div class="col-lg-6 mb-4">
                    <h4 class="mb-3">Order Summary</h4>
                    <div class="card p-3">
                        <p><strong>Subtotal:</strong> ₦{{ number_format($order->subtotal, 2) }}</p>
                        <p><strong>Shipping Fee:</strong> ₦{{ number_format($order->shipping_fee, 2) }}</p>
                        @if ($order->coupon_discount > 0)
                            <p><strong>Coupon Discount:</strong> -₦{{ number_format($order->coupon_discount, 2) }}</p>
                        @endif
                        <hr>
                        <p class="h5"><strong>Total:</strong> ₦{{ number_format($order->total, 2) }}</p>
                    </div>
                </div>
            </div>

            {{-- Order Items --}}
            <h4 class="mb-3">Order Items</h4>
            <div class="table-responsive mb-4">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>Product</th>
                            <th>Category</th>
                            <th>Unit Price</th>
                            <th>Quantity</th>
                            <th>Line Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->items as $item)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-2">
                                        @if ($item->product_image)
                                            <img src="{{ asset('storage/' . $item->product_image) }}"
                                                alt="{{ $item->product_name }}" width="50">
                                        @endif
                                        {{ $item->product_name }}
                                    </div>
                                </td>
                                <td>{{ $item->category_slug ?? 'N/A' }}</td>
                                <td>₦{{ number_format($item->unit_price, 2) }}</td>
                                <td>{{ $item->quantity }}</td>
                                <td>₦{{ number_format($item->line_total, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{-- Footer --}}
            <div class="invoice-footer text-center mt-5">
                <p>Thank you for shopping with Gudpanda!</p>
                <p class="small">This invoice was generated electronically and is valid without a signature.</p>
            </div>

            {{-- Action Buttons (hidden on print) --}}
            <div class="text-center mt-4 no-print">
                <a href="{{ route('guest.shop') }}" class="btn btn-primary">Continue Shopping</a>
                <button onclick="window.print()" class="btn btn-outline-secondary">
                    <i class="fa fa-print"></i> Print Invoice
                </button>
            </div>
        </div>
    </div>

    {{-- Print Styles --}}
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            .order-success-page,
            .order-success-page * {
                visibility: visible;
            }

            .order-success-page {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            .no-print {
                display: none !important;
            }
        }
    </style>

@endsection
