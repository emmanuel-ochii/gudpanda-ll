<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Default Site Title as a fallback -->
    <title>@yield('title')</title>

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('guest/img/favicon.png') }}">

    <!-- Guest CSS -->
    <link href="{{ asset('guest/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('guest/css/fontawesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('guest/css/venobox.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('guest/css/odometer.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('guest/css/nice-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('guest/css/swiper.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('guest/css/main.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite([ 'resources/js/app.js'])
</head>

<body>
    <main>

       <livewire:layout.nav-menu />

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                </form>
                <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
            </div>
        </div>
        <!-- /#popup-search-box -->

        <div class="mobile-side-menu" style="--rr-color-theme-primary: #E53E3E">
            <div class="side-menu-content">
                <div class="side-menu-head">
                    <a href='#'><img :src="logo2" alt="logo"></a>
                    <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
                </div>
                <div class="side-menu-wrap"></div>
                <ul class="side-menu-list">
                    <li><i class="fa-light fa-location-dot"></i>Address : <span>Amsterdam, 109-74</span></li>
                    <li><i class="fa-light fa-phone"></i>Phone : <a href="tel:+01569896654">+01 569 896 654</a></li>
                    <li><i class="fa-light fa-envelope"></i>Email : <a
                            href="mailto:info@example.com">info@example.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.mobile-side-menu -->

        <!-- <div id="preloader" style="--rr-color-theme-primary: #E53E3E">
        <div class="preloader-close">X</div>
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div> -->
        <!-- ./ preloader -->

        @yield('content')

        <footer class="footer-section bg-grey pt-20" style="--rr-color-theme-primary: #E53E3E">
            <div class="container">
                <div class="footer-items">
                    <div class="footer-item">
                        <div class="icon">
                            <img :src="footer1" alt="icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Free Shipping</h4>
                            <span>Free shipping on orders over ₦65</span>
                        </div>
                    </div>
                    <div class="footer-item">
                        <div class="icon">
                            <img :src="footer2" alt="icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Free Returns</h4>
                            <span>30-days free return policy</span>
                        </div>
                    </div>
                    <div class="footer-item">
                        <div class="icon">
                            <img :src="footer3" alt="icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Secured Payments</h4>
                            <span>We accept all major credit card</span>
                        </div>
                    </div>
                    <div class="footer-item item-2">
                        <div class="icon">
                            <img :src="footer4" alt="icon">
                        </div>
                        <div class="content">
                            <h4 class="title">Customer Service</h4>
                            <span>Top notch customer service</span>
                        </div>
                    </div>
                </div>

                <div class="row footer-widget-wrap pb-10">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">About Gudpanda</h3>
                            </div>
                            <div class="footer-contact">
                                <div class="icon"><i class="fa-sharp fa-solid fa-phone-rotary"></i></div>
                                <div class="content">
                                    <span>Have Question? Call Us 24/7</span>
                                    <a href="tel:+25836922569">+258 3692 2569</a>
                                </div>
                            </div>
                            <ul class="schedule-list">
                                <li><span>Monday - Friday:</span>8:00am - 6:00pm</li>
                                <li><span>Saturday:</span>8:00am - 6:00pm</li>
                                <li><span>Sunday</span> Service Close</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <!-- <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Our Stores</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="contact.html">New York</a></li>
                            <li><a href="contact.html">London SF</a></li>
                            <li><a href="contact.html">Los Angele</a></li>
                            <li><a href="contact.html">Chicago</a></li>
                            <li><a href="contact.html">Las Vegas</a></li>
                        </ul>
                    </div> -->
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">Shop Categories</h3>
                            </div>
                            <ul class="footer-list">
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Best Selling</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Fresh Meat</a></li>
                                <li><a href="#">Fresh Seafood</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">Useful Links</h3>
                            </div>
                            <ul class="footer-list">
                                <li>
                                    <Link href="/">Privacy Policy</Link>
                                </li>
                                <li>
                                    <Link href="/">Terms & Conditions</Link>
                                </li>
                                <li>
                                    <Link href="/">Contact Us</Link>
                                </li>
                                <li>
                                    <Link href="/">Latest News</Link>
                                </li>
                                <li>
                                    <Link href="/">Our Sitemaps</Link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="widget-header">
                                <h3 class="widget-title">Our Newsletter</h3>
                            </div>
                            <div class="news-form-wrap">
                                <p class="mb-10">Subscribe to the mailing list to receive updates one the new arrivals
                                    and
                                    other discounts</p>

                                <div class="footer-form mb-10">
                                    <form action="#" class="rr-subscribe-form">
                                        <input class="form-control" type="email" name="email"
                                            placeholder="Email address">
                                        <input type="hidden" name="action" value="mailchimpsubscribe">
                                        <button class="submit">Subscribe</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="copyright-area">
                <div class="container">
                    <div class="row copyright-content">
                        <div class="col-lg-6">
                            <div class="footer-img-wrap">
                                <span>Acceptable Payments:</span>
                                <div class="footer-img">
                                    <Link href="/">
                                    <img :src="footerImg1" alt="img">
                                    </Link>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p>Copyright & Design 2024 <span>© Gudpanda </span>. All Right Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ./ footer-section -->

        <div id="scroll-percentage" style="--rr-color-theme-primary:#E53E3E"><span
                id="scroll-percentage-value"></span>
        </div>
        <!--scrollup-->
    </main>

    <!-- Guest JS -->
    <script src="{{ asset('guest/js/vendor/jquary-3.6.0.min.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/meanmenu.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/smooth-scroll.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/jquery.isotope.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('guest/js/vendor/nice-select.js') }}"></script>
    <script src="{{ asset('guest/js/ajax-form.js') }}"></script>
    <script src="{{ asset('guest/js/contact.js') }}"></script>
    <script src="{{ asset('guest/js/main.js') }}"></script>
</body>

</html>
