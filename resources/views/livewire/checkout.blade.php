<div>
    <form wire:submit.prevent="placeOrder">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="checkout-left">
                    <h3 class="form-header">Billing Details</h3>

                    <div class="checkout-form-wrap">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item">
                                    <h4 class="form-title">Email Address*</h4>
                                    <input type="email" wire:model.lazy="email" class="form-control">
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-item name">
                                    <h4 class="form-title">First Name*</h4>
                                    <input type="text" wire:model.lazy="first_name" class="form-control">
                                    @error('first_name')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-item">
                                    <h4 class="form-title">Last Name*</h4>
                                    <input type="text" wire:model.lazy="last_name" class="form-control">
                                    @error('last_name')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item">
                                    <h4 class="form-title">Company Name (Optional)</h4>
                                    <input type="text" wire:model.lazy="company" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item">
                                    <h4 class="form-title">Country / Region*</h4>
                                    <input type="text" wire:model.lazy="country" class="form-control"
                                        placeholder="Country">
                                    @error('country')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item ">
                                    <h4 class="form-title">Street Address*</h4>
                                    <input type="text" wire:model.lazy="address1" class="form-control street-control"
                                        placeholder="House number and street number">
                                    <input type="text" wire:model.lazy="address2"
                                        class="form-control street-control-2 mt-2"
                                        placeholder="Apartment, suite, unit, etc. (optional)">
                                    @error('address1')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item">
                                    <h4 class="form-title">Town / City*</h4>
                                    <input type="text" wire:model.lazy="city" class="form-control">
                                    @error('city')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="form-item">
                                    <h4 class="form-title">State</h4>
                                    <input type="text" wire:model.lazy="state" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-item">
                                    <h4 class="form-title">Zip Code</h4>
                                    <input type="text" wire:model.lazy="zip" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item">
                                    <h4 class="form-title">Phone*</h4>
                                    <input type="text" wire:model.lazy="phone" class="form-control">
                                    @error('phone')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-item">
                                    <h4 class="form-title">Order Notes</h4>
                                    <textarea wire:model.lazy="notes" cols="30" rows="5" class="form-control address"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Right column (order summary) --}}
            <div class="col-lg-6 col-md-12">
                <div class="checkout-right">
                    <h3 class="form-header">Your Order</h3>

                    <div class="order-box">
                        <div class="order-items">
                            <div class="order-item item-1">
                                <div class="order-left"><span class="product">Product</span></div>
                                <div class="order-right"><span class="price">Price</span></div>
                            </div>

                            @forelse ($cart as $productId => $item)
                                <div class="order-item">
                                    <div class="order-left">
                                        <div class="order-img">
                                            <a
                                                href="{{ route('product.details', [$item['category_slug'] ?? '#', $item['slug'] ?? '#']) }}">
                                                <img src="{{ asset('storage/' . ($item['image'] ?? '')) }}"
                                                    alt="{{ $item['name'] }}" style="max-width:60px;">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="order-right">
                                        <div class="content">
                                            <span class="category">{{ $item['category_name'] ?? '' }}</span>
                                            <h4 class="title">
                                                <a
                                                    href="{{ route('product.details', [$item['category_slug'] ?? '#', $item['slug'] ?? '#']) }}">
                                                    {{ $item['name'] }}
                                                </a>
                                            </h4>
                                            <small>Qty: {{ $item['quantity'] }}</small>
                                        </div>
                                        <span
                                            class="price">₦{{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                                    </div>
                                </div>
                            @empty
                                <p class="px-3 text-danger">Your cart is empty.</p>
                            @endforelse


                            <div class="order-item item-1">
                                <div class="order-left">
                                    <span class="left-title">Subtotal</span>
                                </div>
                                <div class="order-right">
                                    <span class="right-title">₦{{ number_format($this->subtotal, 2) }}</span>
                                </div>
                            </div>

                            {{-- Shipping selection --}}
                            <div class="order-item item-1">
                                <div class="order-left"><span class="left-title">Shipping</span></div>
                                <div class="order-right">
                                    <div class="checkout-option-wrapper">
                                        <div class="shipping-option">
                                            <input id="free_shipping" type="radio" wire:model="selectedShipping"
                                                value="free_shipping">
                                            <label for="free_shipping">Free Shipping (₦0)</label>
                                        </div>
                                        <div class="shipping-option">
                                            <input id="flat_rate" type="radio" wire:model="selectedShipping"
                                                value="flat_rate">
                                            <label for="flat_rate">Flat Rate (₦1500)</label>
                                        </div>
                                        <div class="shipping-option">
                                            <input id="local_pickup" type="radio" wire:model="selectedShipping"
                                                value="local_pickup">
                                            <label for="local_pickup">Local Pickup (₦500)</label>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <small>Selected shipping fee: ₦{{ number_format($shippingFee, 2) }}</small>
                                    </div>
                                </div>
                            </div>

                            {{-- Coupon --}}
                            {{-- <div class="order-item item-1">
                                <div class="order-left"><span class="left-title">Coupon</span></div>
                                <div class="order-right">
                                    <div class="d-flex gap-2">
                                        <input type="text" wire:model.defer="couponCode" class="form-control"
                                            placeholder="Coupon code">
                                        <button wire:click.prevent="applyCoupon"
                                            class="btn btn-secondary">Apply</button>
                                        @if ($appliedCoupon)
                                            <button wire:click.prevent="removeCoupon"
                                                class="btn btn-link text-danger">Remove</button>
                                        @endif
                                    </div>
                                    @error('coupon')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                    @if ($appliedCoupon)
                                        <div class="mt-1 small text-success">Applied: {{ $appliedCoupon->code }}
                                            (-₦{{ number_format($couponDiscount, 2) }})</div>
                                    @endif
                                </div>
                            </div> --}}

                            <div class="order-item item-1">
                                <div class="order-left"><span class="left-title">Total Price:</span></div>
                                <div class="order-right">
                                    <span class="right-title title-2">₦{{ number_format($this->total, 2) }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="payment-option-wrap mt-3">
                            <p class="desc">
                                Your personal data will be used to process your order, support your experience
                                throughout this website, and for other purposes described in our
                                <span>privacy policy.</span>
                            </p>

                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" wire:model="agree_terms"
                                    id="terms">
                                <label class="form-check-label" for="terms">
                                    I have read and agree to the terms and conditions *
                                </label>
                                @error('agree_terms')
                                    <div class="text-danger small">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="rr-primary-btn order-btn">
                                <i class="fa-solid fa-credit-card me-2"></i> Place Your Order
                            </button>

                            @error('general')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                            @error('cart')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>
