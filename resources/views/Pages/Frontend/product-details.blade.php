@extends('layouts.frontend')

@section('title', $product->name)

@section('content')
    <section class="page-header">
        <x-bg-page-header />

        <div class="container">
            <div class="page-header-content">
                <h1 class="title"> {{ $product->name }} </h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="{{ route('guest.shop') }}">
                            <span> Shop </span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span> {{ $product->name }}</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->


    <section class="shop-section single pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 product-details-wrap">
                    <div class="product-slider-wrap">
                        <div class="swiper product-gallary-thumb">
                            <div class="swiper-wrapper">
                                @php
                                    $galleryImages = is_string($product->product_gallery_images)
                                        ? json_decode($product->product_gallery_images, true)
                                        : $product->product_gallery_images;
                                @endphp

                                <!-- First Thumbnail (Product Display Image) -->
                                <div class="swiper-slide">
                                    <div class="thumb-item">
                                        <img src="{{ asset('storage/' . $product->product_display_image) }}"
                                            alt="{{ $product->name }}">
                                    </div>
                                </div>

                                <!-- Other Thumbnails -->
                                @if (is_array($galleryImages))
                                    @foreach ($galleryImages as $image)
                                        <div class="swiper-slide">
                                            <div class="thumb-item">
                                                <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="swiper product-gallary">
                            <span class="sale">Sale</span>
                            <div class="swiper-wrapper">
                                <!-- First Main Image (Product Display Image) -->
                                <div class="swiper-slide">
                                    <div class="gallary-item">
                                        <img src="{{ asset('storage/' . $product->product_display_image) }}"
                                            alt="{{ $product->name }}">
                                    </div>
                                </div>
                                @if (is_array($galleryImages))
                                    @foreach ($galleryImages as $image)
                                        <div class="swiper-slide">
                                            <div class="gallary-item">
                                                <img src="{{ asset('storage/' . $image) }}" alt="{{ $product->name }}">
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="swiper-nav-next"><i class="las la-arrow-right"></i></div>
                            <div class="swiper-nav-prev"><i class="las la-arrow-left"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details">
                        <div class="product-info">
                            <div class="product-inner">
                                <span class="category"> {{ $product->category->name }} </span>
                                <h3 class="title"> {{ $product->name }} </h3>
                                <div class="rating-wrap">
                                    <ul class="rating">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <li><i
                                                    class="fa-sharp fa-solid fa-star {{ $i <= $product->rating ? 'text-warning' : '' }}"></i>
                                            </li>
                                        @endfor
                                    </ul>
                                    <span>(1 customer review)</span>
                                    {{-- <span>({{ $product->reviews->count() }} customer reviews)</span> --}}
                                </div>
                                <h4 class="price">
                                    ₦{{ number_format($product->price, 2) }}
                                    @if ($product->discount_price)
                                        <span>₦{{ number_format($product->discount_price, 2) }}</span>
                                    @endif
                                </h4>
                                <div class="product-desc-wrap">
                                    <p class="desc"> {!! nl2br(e($product->description)) !!} </p>
                                    <span class="view-text"><i class="fa-sharp fa-regular fa-eye"></i> {{ rand(10, 100) }} people are viewing this right now </span>
                                </div>
                                <div class="item-left-line">
                                    <span>Only {{ $product->stock }} items left in stock!</span>
                                    <div class="line"></div>
                                </div>
                                <ul class="details-list">
                                    <li><i class="fa-light fa-arrow-right-arrow-left"></i>Free returns</li>
                                    <li><i class="fa-light fa-truck"></i>Free shipping via DHL, fully insured</li>
                                    <li><i class="fa-light fa-circle-check"></i>All taxes and customs duties included</li>
                                </ul>
                            </div>
                            <div class="product-btn">
                                <form>
                                    <input type="number" name="age" id="age" min="1" max="100"
                                        step="1" value="1">
                                </form>
                                <div class="cart-btn-wrap-2"><a href="#" class="rr-primary-btn cart-btn">Add To
                                        Cart</a></div>
                            </div>
                            <a href="#" class="shop-details-btn rr-primary-btn">Buy The Item Now</a>
                            <ul class="product-meta">
                                <li><a href="#">Compare</a></li>
                                <li><a href="#">Ask a question</a></li>
                                <li><a href="#">Share</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Shop Section-->

    <section class="product-description pb-100">
        <div class="container">
            <ul class="nav tab-navigation" id="product-tab-navigation" role="tablist">
                <li role="presentation">
                    <button class="active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                        role="tab" aria-controls="home" aria-selected="true">Description</button>
                </li>
                <li role="presentation">
                    <button id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                        aria-controls="profile" aria-selected="false">Additional information</button>
                </li>
                <li role="presentation">
                    <button id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                        role="tab" aria-controls="contact" aria-selected="false">Reviews (3)</button>
                </li>
            </ul>
            <div class="tab-content" id="product-tab-content">
                <div class="tab-pane fade show active description" id="home" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="desc-wrap">
                        <div class="left-content">
                            <p class="mb-30">Credibly negotiate emerging materials whereas clicks-and-mortar intellectual
                                capital. Compellingly whiteboard client-centric sourcescross-platform schemas. Distinctively
                                develop future-proof outsourcing without multimedia based portals. Progressively coordinate
                                generation architectures for collaborative solutions. Professionally restore
                                backward-compatible quality vectors before customer directed metrics. Holisticly restore
                                technically sound internal or "organic" sources before client-centered human capital
                                underwhelm holistic mindshare for prospective innovation.</p>
                            <p class="mb-0">Seamlessly target fully tested infrastructures whereas just in time process
                                improvements. Dynamically exploit team driven functionalities vis a vis global total linkage
                                redibly synthesize just in time technology rather than open-source strategic theme areas.
                            </p>
                        </div>
                        <div class="right-content">
                            <img src="assets/img/shop/shop-details-img.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <table class="table product-table">
                        <thead>
                            <tr>
                                <th scope="col">Size</th>
                                <th scope="col">Bust</th>
                                <th scope="col">Waist</th>
                                <th scope="col">Hip</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>S</td>
                                <td>34 -36</td>
                                <td>28-30</td>
                                <td>38-40</td>
                            </tr>
                            <tr>
                                <td>M</td>
                                <td>36 -38</td>
                                <td>30-32.5</td>
                                <td>40-43</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>38-40</td>
                                <td>32-34.5</td>
                                <td>42-45.5</td>
                            </tr>
                            <tr>
                                <td>XL</td>
                                <td>40-42</td>
                                <td>35-37</td>
                                <td>46-38</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade review" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row product-review gy-lg-0 gy-4">
                        <div class="col-lg-5 col-md-12">
                            <div class="reviewr-wrap">
                                <div class="review-list">
                                    <div class="review-item">
                                        <div class="review-thumb">
                                            <img src="assets/img/shop/review-list-1.jpg" alt="img">
                                        </div>
                                        <div class="content">
                                            <div class="content-top">
                                                <h4 class="name">Eleanor Fant <span>06 March, 2023</span></h4>
                                                <ul class="review">
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <p>Designed very similarly to the nearly double priced Galaxy tab S6, with the
                                                only removal being.</p>
                                        </div>
                                    </div>
                                    <div class="review-item">
                                        <div class="review-thumb">
                                            <img src="assets/img/shop/review-list-2.jpg" alt="img">
                                        </div>
                                        <div class="content">
                                            <div class="content-top">
                                                <h4 class="name">Haliey White <span>06 March, 2023</span></h4>
                                                <ul class="review">
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                    <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <p>Designed very similarly to the nearly double priced Galaxy tab S6, with the
                                                only removal being.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="review-form-wrap">
                                <h4 class="title">Review this product</h4>
                                <span class="publish">Your email address will not be published. Required fields are marked
                                    *</span>
                                <div class="review-box">
                                    <span>Your ratings :</span>
                                    <ul class="review">
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                        <li><i class="fa-sharp fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="blog-contact-form form-2 review-form">
                                    <div class="request-form">
                                        <form action="contact.php" method="post" id="ajax_contact"
                                            class="form-horizontal">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <div class="form-item">
                                                        <input type="text" id="fullname" name="fullname"
                                                            class="form-control" placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-item">
                                                        <input type="text" id="email" name="email"
                                                            class="form-control" placeholder="Your Email">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <div class="form-item message-item">
                                                        <textarea id="message" name="message" cols="30" rows="5" class="form-control address"
                                                            placeholder="Comment"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="checkbox-wrap">
                                                <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                                <label for="vehicle3">Save my name, email, and website in this browser for
                                                    the next time I comment.</label><br>
                                            </div>
                                            <div class="submit-btn">
                                                <button id="submit" class="rr-primary-btn"
                                                    type="submit">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Product Description-->



    <!-- ./ Shop Grid -->
@endsection
