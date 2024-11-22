@extends('layouts.frontend')

@section('title', 'Bid | Gudpanda')

@section('content')
    <section class="page-header">
        <x-bg-page-header />
        <div class="container">
            <div class="page-header-content">
                <h1 class="title"> About Us</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/" wire:navigate>
                            <span> Home </span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span> About Us </span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="about-section pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <div class="section-heading">
                            <h2 class="section-title">Creating a World Where Fashion is a Lifestyle</h2>
                            <p>Fashionable content invites us to embark on a fashion-forward journey, where creativity
                                knows no bounds and self-expression is celebrated. So, let's dive into the world of
                                fashion, where trends are set, boundaries are broken.</p>
                        </div>
                        <div class="about-items">
                            <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Fast Growing Sells
                            </div>
                            <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>24/7 Quality
                                Services</div>
                            <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Skilled Team
                                Members</div>
                            <div class="about-item"><i class="fa-sharp fa-solid fa-circle-check"></i>Best Quality
                                Services</div>
                        </div>
                        <a href="#" class="rr-primary-btn about-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-img">
                        <img :src="aboutImg1" alt="about">
                        <div class="play-btn">
                            <a class="video-popup" data-autoplay="true" data-vbtype="video"
                                href="https://youtu.be/Dngwk0BBLmw?feature=shared">
                                <div class="play-btn">
                                    <i class="fa-sharp fa-solid fa-play"></i>
                                </div>
                                <div class="ripple"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ about-section -->

    <!-- <section class="team-section pt-100 pb-100">
            <div class="container">
                <div class="section-heading text-center">
                    <h2 class="section-title">Meet With Team</h2>
                </div>
                <div class="row gy-lg-0 gy-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team/team-1.png" alt="img">
                            </div>
                            <div class="team-content text-center">
                                <span>Design Director</span>
                                <h3 class="title">Henry David Wilson</h3>
                                <ul class="team-social">
                                    <li><a href="#">FB</a></li>
                                    <li><a href="#">TW</a></li>
                                    <li><a href="#">IG</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team/team-2.png" alt="img">
                            </div>
                            <div class="team-content text-center">
                                <span>Design Director</span>
                                <h3 class="title">Travis Head</h3>
                                <ul class="team-social">
                                    <li><a href="#">FB</a></li>
                                    <li><a href="#">TW</a></li>
                                    <li><a href="#">IG</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team/team-3.png" alt="img">
                            </div>
                            <div class="team-content text-center">
                                <span>Design Director</span>
                                <h3 class="title">Smirthi Mandhana</h3>
                                <ul class="team-social">
                                    <li><a href="#">FB</a></li>
                                    <li><a href="#">TW</a></li>
                                    <li><a href="#">IG</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-thumb">
                                <img src="assets/img/team/team-4.png" alt="img">
                            </div>
                            <div class="team-content text-center">
                                <span>Design Director</span>
                                <h3 class="title">Henry Klassen</h3>
                                <ul class="team-social">
                                    <li><a href="#">FB</a></li>
                                    <li><a href="#">TW</a></li>
                                    <li><a href="#">IG</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- ./ team-section -->

    <section class="service-section pt-100 pb-100">
        <div class="container">
            <div class="row gy-lg-0 gy-4">
                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="service-item">
                        <div class="service-content top-area text-center">
                            <span class="number">01</span>
                            <h3 class="title">Our Mission</h3>
                            <p>
                                Our mission is to provide a reliable and dynamic online marketplace where users can
                                discover, gift, bid, and purchase unique items offering products that span various
                                categories including Phones, Computers, Clothing, Shoes, Home Appliances, Books,
                                healthcare, Baby Products, personal care and much more from around Nigeria and Africa at
                                large.
                            </p>
                        </div>
                        <div class="service-img">
                            <img :src="service1" alt="service">
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="service-item item-2">
                        <div class="service-img top-area">
                            <img :src="service2" alt="service">
                        </div>
                        <div class="service-content text-center">
                            <span class="number">02</span>
                            <h3 class="title">Our Vision</h3>
                            <p>
                                To build a community that connects and empowers Africans with each other and the rest of
                                the world through Technology & Commerce.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="service-item">
                        <div class="service-content top-area text-center">
                            <span class="number">03</span>
                            <h3 class="title">Our Team</h3>
                            <p>
                                Our team comprises passionate professionals dedicated to enhancing your shopping
                                experience. Meet our founders, developers, customer support agents, and marketing
                                experts.
                            </p>
                        </div>
                        <div class="service-img">
                            <img :src="service3" alt="service">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ service-section -->

    <section class="testimonial-section about-testi pt-100 pb-100">
        <div class="container">
            <div class="section-heading white-content text-center">
                <h2 class="section-title">Happy Customers</h2>
            </div>
            <div class="testimonial-carousel swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-item-wrap">
                            <div class="testi-item testi-item-2">
                                <div class="testi-top-content">
                                    <h4 class="title">Product Quality</h4>
                                    <ul class="review">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <p>“This is genuinely the first theme bought for which i did not had to write one line
                                    of ode. I would recommend everybody“</p>
                                <div class="shape"><img :src="testiShape" alt="shape"></div>
                            </div>
                            <div class="testi-author">
                                <img :src="testiAuthor" alt="img">
                                <h4 class="name">Alaxis D. Dowson <span>Head Of Idea</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-item-wrap">
                            <div class="testi-item testi-item-2">
                                <div class="testi-top-content">
                                    <h4 class="title">Product Quality</h4>
                                    <ul class="review">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <p>“This is genuinely the first theme bought for which i did not had to write one line
                                    of ode. I would recommend everybody“</p>
                                <div class="shape"><img :src="testiShape" alt="shape"></div>
                            </div>
                            <div class="testi-author">
                                <img :src="testiAuthor2" alt="img">
                                <h4 class="name">Son Heung Min <span>Head Of Idea</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-item-wrap">
                            <div class="testi-item testi-item-2">
                                <div class="testi-top-content">
                                    <h4 class="title">Product Quality</h4>
                                    <ul class="review">
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                        <li><i class="fa-solid fa-star"></i></li>
                                    </ul>
                                </div>
                                <p>“This is genuinely the first theme bought for which i did not had to write one line
                                    of ode. I would recommend everybody“</p>
                                <div class="shape"><img :src="testiShape" alt="shape"></div>
                            </div>
                            <div class="testi-author">
                                <img :src="testiAuthor3" alt="img">
                                <h4 class="name">David Miller <span>Head Of Idea</span></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ testimonial-section -->

    <!-- <div class="sponsor-section pt-100 pb-100">
            <div class="container">
                <div class="row sponsor-wrap">
                    <div class="sponsor-item bd-right bd-bottom">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-1.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-right bd-bottom">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-2.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-right bd-bottom">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-3.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-right bd-bottom">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-4.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-bottom">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-5.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-right">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-6.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-right">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-7.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-right">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-8.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item bd-right">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-9.png" alt="img"></a>
                    </div>
                    <div class="sponsor-item">
                        <a href="#"><img src="../../../assets/guest/img/sponsor/sponsor-10.png" alt="img"></a>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- ./ sponsor-section -->


@endsection
