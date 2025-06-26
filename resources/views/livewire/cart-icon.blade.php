<div class="header-cart-btn" style="background-color: #E53E3E">
    <a href="{{ route('guest.myCart') }}" class="icon">
        <i class="fa-light fa-bag-shopping"></i>
    </a>
    <span>₦{{ number_format($totalPrice, 2) }} ({{ $totalCount }})</span>
</div>
