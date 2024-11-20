 <!-- header-area-start -->
 <header class="header header-2 sticky-active" style="--rr-color-theme-primary: #E53E3E">
     <div class="top-bar" style="border-top: 5px solid #E53E3E;">
         <div class="container">
             <div class="top-bar-inner">
                 <div class="top-bar-left">
                     <ul class="top-left-list">
                         <li><a href="about.html">About</a></li>
                         <li><a href="contact.html">My Account</a></li>
                         <li><a href="wishlist.html">Wishlist</a></li>
                         <li><a href="checkout.html">Checkout</a></li>
                     </ul>
                 </div>
                 <div class="top-bar-right">
                     <span>Need Help? Call Us: <a href="tel:+258326821485">+258 3268 21485</a></span>
                 </div>
             </div>
         </div>
     </div>

     <div class="header-middle">
         <div class="container">
             <div class="header-middle-inner">

                 <div class="header-middle-left">
                     <div class="header-logo d-lg-block">
                         <a href="/" wire:navigate>
                             <img src="{{ asset('guest/img/logo/logo-3.png') }}" alt="Logo">
                         </a>
                     </div>
                     <div class="form-wrap">
                         <div class="nice-select select-control country" tabindex="0">
                             <span class="current">Categories</span>
                             <ul class="list">
                                 <li data-value="" class="option selected focus">Categories</li>
                                 <li data-value="vdt" class="option">Fashion</li>
                                 <li data-value="can" class="option">Organic</li>
                                 <li data-value="uk" class="option">Furniture</li>
                             </ul>
                         </div>
                         <div class="category-form-wrap">
                             <form class="header-form">
                                 <input class="form-control" type="text" name="search"
                                     placeholder="Search for products, categories or brands">
                                 <button class="submit rr-primary-btn"> Search <i
                                         class="fa-light fa-magnifying-glass"></i></button>
                             </form>
                         </div>
                     </div>
                 </div>

                 <div class="header-middle-right">
                     <ul class="contact-item-list">
                         <li>
                             <a href="wishlist.html" class="icon">
                                 <i class="fa-sharp fa-regular fa-heart"></i>
                             </a>
                         </li>
                         <li><a href="register.html" class="login-btn">Login / Register</a></li>
                         <li>
                             <div class="header-cart-btn" style="background-color: #E53E3E">
                                 <a href="cart.html" class="icon">
                                     <i class="fa-light fa-bag-shopping"></i>
                                 </a>
                                 <span>$0.00</span>
                             </div>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>

     <div class="primary-header  bg-black">
         <div class="container">
             <div class="primary-header-inner bg-danger;">
                 <div class="header-logo mobile-logo">
                     <a href="/" wire:navigate>
                         <img src="{{ asset('guest/img/logo/logo-3.png') }}" alt="Logo">
                     </a>
                 </div>

                 <div class="header-menu-wrap">
                     <div class="mobile-menu-items">
                         <ul>
                             <li>
                                 <a href="/" wire:navigate> Home </a>
                             </li>
                             <li>
                                 <a href="/shop" wire:navigate> Shop </a>
                             </li>
                             <li class="menu-item-has-children">
                                 <a href="/about" wire:navigate>About Us</a>
                                 <ul>
                                     <li>
                                         <a href="/what-we-do" wire:navigate>What We Do</a>
                                     </li>
                                     <li>
                                         <a href="/join-our-team" wire:navigate>Join Our Team</a>
                                     </li>
                                 </ul>
                             </li>
                             <li>
                                 <a href="/become-a-giver" wire:navigate> Become A Giver</a>
                             </li>
                             <li>
                                 <a href="{{route('guest.bid')}}" wire:navigate> Bid </a>
                             </li>
                             <li>
                                 <a href="faq" wire:navigate> FAQs </a>
                             </li>
                             <li>
                                 <a href="contact" wire:navigate>Contact</a>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <!-- /.header-menu-wrap -->

                 <div class="header-right-wrap">
                     <div class="header-right">
                         <span>Get 30% Discount Now <span>Sale</span></span>
                         <div class="header-right-item">
                             <a href="javascript:void(0)" class="mobile-side-menu-toggle"><i
                                     class="fa-sharp fa-solid fa-bars"></i></a>
                         </div>
                     </div>
                     <!-- /.header-right -->
                 </div>
             </div>
             <!-- /.primary-header-inner -->
         </div>
     </div>
 </header>
 <!-- /.Main Header -->
