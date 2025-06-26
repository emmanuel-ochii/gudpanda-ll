<div class="container py-4">
    @if (count($cart) > 0)
        <section class="cart-section pt-130 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-top-content">
                            <p>Add <span>$59.69</span> to cart and get free shipping</p>
                            <div class="line"></div>
                        </div>
                        <div class="table-content cart-table">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="cart-product-name text-center">Products</th>
                                        <th class="product-price"> Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cart as $id => $item)
                                        <tr>
                                            <td class="product-remove">
                                                <button wire:click="removeItem({{ $id }})"> <i
                                                        class="fa-sharp fa-regular fa-xmark"></i> </button>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a
                                                    href="{{ route('product.details', [$item['category_slug'], $item['slug']]) }}">
                                                    <img src="{{ asset('storage/' . $item['image']) }}" width="50">
                                                </a>
                                                <div class="product-thumbnail">
                                                    <h4 class="title">
                                                        <a
                                                            href="{{ route('product.details', [$item['category_slug'], $item['slug']]) }}">
                                                            {{ $item['name'] }}
                                                        </a>
                                                    </h4>
                                                </div>
                                            </td>
                                            <td class="product-price"><span class="amount">
                                                    ₦{{ number_format($item['price'], 2) }} </span></td>
                                            <td class="product-quantity">

                                                {{ $item['quantity'] }}

                                                {{-- To increase number the item  --}}

                                                {{-- <div class="quantity__group">
                                            <input type="number" class="input-text qty text" name="quantity" value="1"
                                                min="1" max="100" step="1" autocomplete="off">
                                                </div> --}}
                                            </td>
                                            <td class="product-subtotal">
                                                <span
                                                    class="amount">₦{{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-btn-wrap">
                            <div class="left-item">
                                <input type="text" class="form-control" placeholder="Coupon Code">
                                <button class="rr-primary-btn">Apply Coupon</button>
                            </div>
                            <button class="rr-primary-btn update-btn">Update Cart</button>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="checkout-wrapper">
                            <div class="checkout-top checkout-item item-1">
                                <h4 class="title">Cart Totals</h4>
                            </div>
                            <div class="checkout-top checkout-item">
                                <h4 class="title">Subtotal</h4>
                                <span class="price">$1100.00</span>
                            </div>
                            <div class="checkout-shipping checkout-item">
                                <h4 class="title">Shipping</h4>
                                <div class="shipping-right">
                                    <div class="checkout-option-wrapper">
                                        <div class="shipping-option">
                                            <input id="flat_rate" type="radio" name="shipping">
                                            <label for="flat_rate">Free Shipping</label>
                                        </div>
                                        <div class="shipping-option">
                                            <input id="local_pickup" type="radio" name="shipping">
                                            <label for="local_pickup">Flat Rate</label>
                                        </div>
                                        <div class="shipping-option">
                                            <input id="free_shipping" type="radio" name="shipping">
                                            <label for="free_shipping">Local Pickup</label>
                                        </div>
                                    </div>
                                    <p>Shipping options will be updated <br> during checkout</p>
                                    <span>Calculate Shipping</span>
                                </div>
                            </div>
                            <div class="checkout-total checkout-item">
                                <h4 class="title">Total</h4>
                                <span>$724</span>
                            </div>
                        </div>
                        <div class="checkout-proceed">
                            <a href="checkout.html" class="rr-primary-btn checkout-btn">Proceed to Checkout</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    @else
        <p class="alert alert-info">Your cart is empty.</p>
    @endif
</div>
