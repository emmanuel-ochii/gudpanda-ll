<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="checkout-left">
            <h3 class="form-header">Billing Details</h3>
            <div class="checkout-form-wrap">
                    <form wire:submit.prevent="placeOrder">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">Email Address*</h4>
                                <input type="email" wire:model="email" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-item name">
                                <h4 class="form-title">First Name*</h4>
                                <input type="text" wire:model="firstName" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-item">
                                <h4 class="form-title">Last Name*</h4>
                                <input type="text" wire:model="lastName" class="form-control">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">Company Name (Optional)*</h4>
                                <input type="text" id="company" name="company" class="form-control">
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">Country / Region*</h4>
                                <input type="text" wire:model="country" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item ">
                                <h4 class="form-title">Street Address*</h4>
                                <input type="text" wire:model="address" class="form-control street-control"
                                    placeholder="House number and street number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">Town / City*</h4>
                                <input type="text" wire:model="city" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">State*</h4>
                                <input type="text" wire:model="state" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">Zip Code*</h4>
                                <input type="text" wire:model="zip" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">Phone*</h4>
                                <input type="text" wire:model="phone" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-item">
                                <h4 class="form-title">Order Notes*</h4>
                                <textarea wire:model="notes" cols="30" rows="5" class="form-control address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-lg-6 col-md-12">
            <div class="checkout-right">
                <h3 class="form-header">Your Order</h3>
                <div class="order-box">
                    <div class="order-items">

                        <div class="order-item item-1">
                            <div class="order-left">
                                <span class="product">Product</span>
                            </div>
                            <div class="order-right">
                                <span class="price">Price</span>
                            </div>
                        </div>

                        @foreach ($cartItems as $item)
                        <div class="order-item">
                            <div class="order-left">
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" width="50">
                            </div>
                            <div class="order-right">
                                <span>{{ $item['name'] }} x {{ $item['quantity'] }}</span>
                                <span class="price">${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                            </div>
                        </div>
                        @endforeach

                        <div class="order-item">
                            <div class="order-left">
                                <div class="order-img">
                                    <img src="assets/img/shop/cart-img-3.png" alt="img">
                                </div>
                            </div>
                            <div class="order-right">
                                <div class="content">
                                    <span class="category">Headset Mic</span>
                                    <h4 class="title">Pure Pod Harmony</h4>
                                </div>
                                <span class="price">$500.00</span>
                            </div>
                        </div>

                        <div class="order-item item-1">
                            <div class="order-left">
                                <span class="left-title">Subtotal</span>
                            </div>
                            <div class="order-right">
                                <span class="right-title">${{ number_format($subtotal, 2) }}</span>
                            </div>
                        </div>
                        <div class="order-item item-1">
                            <div class="order-left">
                                <span class="left-title">Shipping</span>
                            </div>
                            <div class="order-right">
                                <span class="right-title">
                                    <span>Flat rate:</span>${{ number_format($shippingCost, 2) }}</span>
                            </div>
                        </div>
                        <div class="order-item item-1">
                            <div class="order-left">
                                <span class="left-title">Total Price:</span>
                            </div>
                            <div class="order-right">
                                <span class="right-title title-2">${{ number_format($totalPrice, 2) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="payment-option-wrap">
                        <div class="payment-option">
                            <div class="shipping-option">
                                <div class="options">
                                    <input type="radio" wire:model="paymentMethod" value="bank">
                                    <label for="flat_rate">Direct Bank Transfer</label>
                                </div>
                                <p class="mb-0"> Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account. </p>
                            </div>
                            <div class="shipping-option">
                                <input type="radio" wire:model="paymentMethod">
                                <label for="local_pickup">Check Payments</label>
                            </div>
                            <div class="shipping-option">
                                <input type="radio" wire:model="paymentMethod">
                                <label for="free_shipping">Cash On Delivery</label>
                            </div>
                            <div class="shipping-option">
                                <input type="radio" wire:model="paymentMethod">
                                <label for="paypal">Paypal</label>
                            </div>
                        </div>
                        <p class="desc">Your personal data will be used to process your order, support your
                            experience throughout this website, and for other purposes described in our
                            <span>privacy policy.</span>
                        </p>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and agree terms and conditions *
                            </label>
                        </div>
                        <button type="submit" class="rr-primary-btn order-btn">Place Your Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
