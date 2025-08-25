<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;

class Checkout extends Component
{
    public $cart = [];

    // Billing fields
    public $email, $first_name, $last_name, $company, $country, $address1, $address2, $city, $state, $zip, $phone, $notes;

    // Shipping
    public $selectedShipping = 'free_shipping';
    public $shippingFee = 0;

    // UI
    public $agree_terms = false;

    #[On('cartUpdated')]
    public function loadCart()
    {
        $this->cart = session()->get('cart', []);
    }

    public function mount()
    {
        // must be logged in
        if (!Auth::check()) {
    session(['intended_url' => route('guest.checkout')]);
    return redirect()->route('login');
}

        $this->loadCart();

        $this->selectedShipping = session()->get('selected_shipping', 'free_shipping');
        $this->shippingFee = (float) session()->get('shipping_fee', 0);
    }

    public function updatedSelectedShipping($value)
    {
        $rates = [
            'free_shipping' => 0,
            'flat_rate' => 1500,
            'local_pickup' => 500,
        ];

        $this->shippingFee = $rates[$value] ?? 0;
        session()->put('selected_shipping', $value);
        session()->put('shipping_fee', $this->shippingFee);
    }

    /** ───── Calculations ───── */
    public function getSubtotalProperty()
    {
        return collect($this->cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    }

    public function getTotalProperty()
    {
        $total = $this->subtotal + $this->shippingFee;
        return $total > 0 ? round($total, 2) : 0.00;
    }

    /** ───── Order Placement ───── */
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

    public function placeOrder()
    {
        $this->validate();

        if (empty($this->cart)) {
            $this->addError('cart', 'Your cart is empty.');
            return;
        }

        DB::beginTransaction();

        try {
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
                'subtotal' => $this->subtotal,
                'shipping_fee' => $this->shippingFee,
                'total' => $this->total,
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

            session()->put('last_order_id', $order->id);
            session()->forget(['cart', 'shipping_fee', 'selected_shipping']);

            $this->dispatch('cartUpdated');

            return redirect()->route('order.success', ['order' => $order->id]);

        } catch (\Throwable $e) {
            DB::rollBack();
            $this->addError('general', 'Failed to place order. Please try again.');
        }
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}
