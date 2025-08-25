<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;


#[Layout('layouts.frontend')]
class OrderSuccess extends Component
{
     public $order;

    public function mount($order)
    {
        // Load the order with items
        $this->order = Order::with('items')->findOrFail($order);

        // Ensure the authenticated user owns this order
        if (Auth::id() !== $this->order->user_id) {
            abort(403, 'Unauthorized access to this order.');
        }
    }

    public function render()
    {
        return view('livewire.order-success');
    }
}
