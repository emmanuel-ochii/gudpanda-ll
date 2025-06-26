<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class AddToCart extends Component
{
    public $productId;
    public $show = 'icon'; // default to icon


    public function mount($productId, $show = 'icon')
{
    $this->productId = $productId;
    $this->show = $show;
}

    public function addToCart()
    {
        $product = Product::findOrFail($this->productId);

        $cart = session()->get('cart', []);

        if (isset($cart[$this->productId])) {
            $cart[$this->productId]['quantity']++;
        } else {
            $cart[$this->productId] = [
                'name' => $product->name,
                'price' => $product->discount_price ?? $product->price,
                'quantity' => 1,
                'image' => $product->product_display_image,
            ];
        }

        session()->put('cart', $cart);

        // Emit event to update the cart icon
        $this->dispatch('cartUpdated');
    }

    public function render()
    {
        return view('livewire.add-to-cart');
    }
}
