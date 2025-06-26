<?php

namespace App\Livewire;

use Livewire\Component;

class MyCart extends Component
{
    public $cart;

    public function mount()
    {
        $this->cart = session()->get('cart', []);
    }

    public function removeItem($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        $this->cart = $cart;

         $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.my-cart');
    }
}
