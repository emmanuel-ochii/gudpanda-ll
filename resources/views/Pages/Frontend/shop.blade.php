@extends('layouts.frontend')

@section('title', 'Shop | Gudpanda')

@section('content')
    <section class="page-header">
        <x-bg-page-header />

        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Shop</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="{{route('guest.home')}}">
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Shop</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="shop-grid-2 pt-100 pb-100">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="{{asset('guest/img/shop/shop-1.png')}}" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">Monica Diara Party Dress</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦250.00</span>₦157.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="guest/img/shop/shop-2.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">Onima Black Flower Sandal</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦450.00</span>₦257.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="guest/img/shop/shop-3.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">Poncho Sweater international</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦550.00</span>₦427.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="guest/img/shop/shop-7.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">D’valo Office Cotton Suite</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦350.00</span>₦257.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="guest/img/shop/shop-8.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">D’valo Office Cotton Suite</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦350.00</span>₦257.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="guest/img/shop/shop-9.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">D’valo Office Cotton Suite</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦350.00</span>₦257.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="guest/img/shop/shop-10.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">D’valo Office Cotton Suite</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦350.00</span>₦257.00</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="shop-item">
                        <div class="shop-thumb">
                            <div class="overlay"></div>
                            <img src="guest/img/shop/shop-11.png" alt="shop">
                            <span class="sale">New</span>
                            <ul class="shop-list">
                                <li><a href="#"><i class="fa-regular fa-cart-shopping"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa-light fa-eye"></i></a></li>
                            </ul>
                        </div>
                        <div class="shop-content">
                            <span class="category">Levi’s Cotton</span>
                            <h3 class="title"><a href="shop-details.html">D’valo Office Cotton Suite</a></h3>
                            <div class="review-wrap">
                                <ul class="review">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span>(15 Reviews)</span>
                            </div>
                            <span class="price"> <span class="offer">₦350.00</span>₦257.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination-wrap justify-content-center mt-50">
                <li><a href="#">1</a></li>
                <li><a href="#" class="active">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa-regular fa-chevrons-right"></i></a></li>
            </ul>
        </div>
    </section>
    <!-- ./ shop-grid -->
@endsection
