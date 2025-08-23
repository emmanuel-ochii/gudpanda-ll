<?php

namespace App\Livewire;

use Livewire\Component;

class MyCart extends Component
{
    public $cart  = [];
    public $shippingFee = 0;
    public $couponDiscount = 0;
    public $selectedShipping = null;
    public $couponCode = '';
    // public $total;

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
        $cart = session()->get('cart', []);
        unset($cart[$id]);

        if (empty($cart)) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

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

        // Save to session if you still want persistence
        session()->put('selected_shipping', $value);
        session()->put('shipping_fee', $this->shippingFee);

        // 👇 This makes Livewire recalc subtotal/total and update Blade
        $this->dispatch('$refresh');
    }

    public function applyCoupon()
    {
        if ($this->couponCode === 'DISCOUNT10') {
            $this->couponDiscount = 1000;
            session()->flash('message', 'Coupon applied successfully: ₦1000 off');
        } else {
            $this->couponDiscount = 0;
            session()->flash('error', 'Invalid coupon code');
        }
        $this->dispatch('$refresh'); // force totals update
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
