<div>
    <a wire:click.prevent="addToCart" href="#">
        @if ($show === 'icon')
            <i class="fa-regular fa-cart-shopping"></i>
        @elseif ($show === 'text')
            Add to Cart
        @endif
    </a>

</div>
