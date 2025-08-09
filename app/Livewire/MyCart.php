<?php

namespace App\Livewire;

use Livewire\Component;

class MyCart extends Component
{
    public $cart  = [];
     public $shippingFee = 0;
    public $couponDiscount = 0;
    public $selectedShipping = null;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function increaseQty($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            $this->cart = $cart;
            $this->dispatch('cartUpdated');
        }
    }

    public function decreaseQty($id)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$id]) && $cart[$id]['quantity'] > 1) {
            $cart[$id]['quantity']--;
            session()->put('cart', $cart);
            $this->cart = $cart;
            $this->dispatch('cartUpdated');
        }
    }

    public function removeItem($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $this->cart = $cart;

        $this->dispatch('cartUpdated');
    }

    public function updatedSelectedShipping($value)
    {
        if ($value === 'flat_rate') {
            $this->shippingFee = 1500;
        } elseif ($value === 'local_pickup') {
            $this->shippingFee = 500;
        } elseif ($value === 'free_shipping') {
            $this->shippingFee = 0;
        }
    }

    public function applyCoupon($code)
    {
        // Example: Apply static discount
        if ($code === 'DISCOUNT10') {
            $this->couponDiscount = 1000;
        }
    }

    public function getSubtotalProperty()
    {
        return collect($this->cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    }

    public function getTotalProperty()
    {
        return max(($this->subtotal + $this->shippingFee - $this->couponDiscount), 0);
    }

    public function proceedToCheckout()
    {
        session()->put('cart', $this->cart);
        session()->put('shipping_fee', $this->shippingFee);
        session()->put('coupon_discount', $this->couponDiscount);
        session()->put('total_price', $this->total);

        return redirect()->route('guest.checkout');
    }

    public function render()
    {
        return view('livewire.my-cart');
    }
}
