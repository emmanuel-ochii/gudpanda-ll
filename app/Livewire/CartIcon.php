<?php

namespace App\Livewire;

use Livewire\Component;

class CartIcon extends Component
{

    public $totalCount = 0;
    public $totalPrice = 0;

    // protected $listeners = ['cartUpdated' => 'mount'];
    protected $listeners = ['cartUpdated' => 'updateCart'];

    // public function mount()
    // {
    //     $cart = session()->get('cart', []);
    //     $this->totalCount = collect($cart)->sum('quantity');
    //     $this->totalPrice = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
    // }

    public function updateCart()
{
    $cart = session()->get('cart', []);
    $this->totalCount = collect($cart)->sum('quantity');
    $this->totalPrice = collect($cart)->sum(fn($item) => $item['price'] * $item['quantity']);
}

    public function render()
    {
        return view('livewire.cart-icon');
    }
}
