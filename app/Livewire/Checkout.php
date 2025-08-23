<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Coupon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class Checkout extends Component
{
    public $cart = [];

    // Billing fields
    public $email;
    public $first_name;
    public $last_name;
    public $company;
    public $country;
    public $address1;
    public $address2;
    public $city;
    public $state;
    public $zip;
    public $phone;
    public $notes;

    // Shipping & coupon
    public $selectedShipping = 'free_shipping'; // default
    public $shippingFee = 0;
    public $couponCode = null;
    public $couponDiscount = 0;
    public $appliedCoupon = null;

    public $subtotal = 0;
    public $total = 0;

    // UI
    public $agree_terms = false;

    protected $listeners = ['cartUpdated' => 'loadCart'];

    public function mount()
    {
        $this->loadCart();

        // Pre-fill shipping fee from session (if any)
        $this->selectedShipping = session()->get('selected_shipping', 'free_shipping');
        $this->shippingFee =(float) session()->get('shipping_fee', 0);
        $this->couponCode = session()->get('coupon_code', null);
        $this->couponDiscount = (float) session()->get('coupon_discount', 0);
    }


    #[On('cartUpdated')]
    public function loadCart()
    {
        $this->cart = session()->get('cart', []);
        // recalc coupon if present
        if ($this->couponCode) {
            $this->calculateCoupon();
        }
    }

    public function updatedSelectedShipping($value)
    {
        // Example rates - adjust to suit (₦)
        $rates = [
            'free_shipping' => 0,
            'flat_rate' => 1500,
            'local_pickup' => 500,
        ];

        $this->shippingFee = $rates[$value] ?? 0;
        session()->put('selected_shipping', $value);
        session()->put('shipping_fee', $this->shippingFee);
    }

    public function calculateSubtotal(): float
    {
        return (float) collect($this->cart)->sum(
            fn($item) => $item['price'] * $item['quantity']
        );
    }

    public function getSubtotalProperty()
    {
        return $this->calculateSubtotal();
    }

    public function getTotalProperty()
    {
        $total = $this->subtotal + $this->shippingFee - $this->couponDiscount;
        return $total > 0 ? round($total, 2) : 0.00;
    }


    public function calculateCoupon()
    {
        $this->couponDiscount = 0;
        $this->appliedCoupon = null;

        if (!$this->couponCode) return;

        $code = strtoupper(trim($this->couponCode));
        $coupon = Coupon::active()->where('code', $code)->first();

        if (!$coupon) {
            $this->addError('coupon', 'Invalid or expired coupon code.');
            return;
        }

        $subtotal = $this->calculateSubtotal();

        if ($coupon->min_order_amount && $subtotal < $coupon->min_order_amount) {
            $this->addError('coupon', 'Order does not meet coupon minimum amount.');
            return;
        }

        if ($coupon->type === 'percent') {
            $this->couponDiscount = round($subtotal * ($coupon->value / 100), 2);
        } else {
            $this->couponDiscount = (float) $coupon->value;
        }

        $this->appliedCoupon = $coupon;
        session()->put('coupon_code', $coupon->code);
        session()->put('coupon_discount', $this->couponDiscount);
        session()->put('coupon_id', $coupon->id);
    }

    public function removeCoupon()
    {
        $this->couponCode = null;
        $this->couponDiscount = 0;
        $this->appliedCoupon = null;
        session()->forget('coupon_code');
        session()->forget('coupon_discount');
        session()->forget('coupon_id');
    }

    protected function rules()
    {
        return [
            'email' => 'required|email',
            'first_name' => 'required|string|max:191',
            'last_name' => 'required|string|max:191',
            'country' => 'required|string|max:191',
            'address1' => 'required|string|max:255',
            'city' => 'required|string|max:191',
            'phone' => 'required|string|max:50',
            'agree_terms' => 'accepted',
        ];
    }

    public function applyCoupon()
    {
        $this->resetValidation('coupon');
        $this->calculateCoupon();
    }

    public function placeOrder()
    {
        $this->validate($this->rules());

        if (empty($this->cart)) {
            $this->addError('cart', 'Your cart is empty.');
            return;
        }

        DB::beginTransaction();

        try {
            $subtotal = $this->calculateSubtotal();
            $total = $this->total;

            $order = Order::create([
                'user_id' => Auth::id(),
                'email' => $this->email,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'company' => $this->company,
                'country' => $this->country,
                'address1' => $this->address1,
                'address2' => $this->address2,
                'city' => $this->city,
                'state' => $this->state,
                'zip' => $this->zip,
                'phone' => $this->phone,
                'notes' => $this->notes,
                'subtotal' => $subtotal,
                'shipping_fee' => $this->shippingFee,
                'coupon_code' => $this->appliedCoupon->code ?? null,
                'coupon_discount' => $this->couponDiscount,
                'total' => $total,
                'status' => 'pending',
            ]);

            foreach ($this->cart as $productId => $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $productId,
                    'product_name' => $item['name'],
                    'product_slug' => $item['slug'] ?? null,
                    'category_slug' => $item['category_slug'] ?? null,
                    'unit_price' => $item['price'],
                    'quantity' => $item['quantity'],
                    'line_total' => $item['price'] * $item['quantity'],
                    'product_image' => $item['image'] ?? null,
                ]);
            }

            DB::commit();

            // store order id for the success page
            session()->put('last_order_id', $order->id);

            // clear cart & checkout session keys
            session()->forget('cart');
            session()->forget('shipping_fee');
            session()->forget('coupon_discount');
            session()->forget('coupon_code');
            session()->forget('selected_shipping');

            // make header/cart icon update
            $this->dispatch('cartUpdated');

            // redirect to order success (Livewire redirect)
            return redirect()->route('order.success', ['order' => $order->id]);
        } catch (\Throwable $e) {
            DB::rollBack();
            $this->addError('general', 'Failed to place order. Please try again.');
            // log error in real app: Log::error($e)
            return;
        }
    }
    public function render()
    {
        return view('livewire.checkout');
    }
}
