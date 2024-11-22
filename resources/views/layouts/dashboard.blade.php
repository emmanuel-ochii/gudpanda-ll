<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Default Site Title as a fallback -->
    <title>@yield('title')</title>


    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashboard/img/favicon.png') }}">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{ asset('dashboard/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{ asset('dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{ asset('dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>

<body>
 <!-- START Wrapper -->
 <div class="wrapper">

    <!-- ========== Topbar Start ========== -->
    <header class="topbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="d-flex align-items-center">
                    <!-- Menu Toggle Button -->
                    <div class="topbar-item">
                        <button type="button" class="button-toggle-menu me-2">
                            <iconify-icon icon="solar:hamburger-menu-broken"
                                class="fs-24 align-middle"></iconify-icon>
                        </button>
                    </div>

                    <!-- Menu Toggle Button -->
                    <div class="topbar-item">
                        <h4 class="fw-bold topbar-button pe-none text-uppercase mb-0"> Welcome! </h4>
                    </div>
                </div>

                <div class="d-flex align-items-center gap-1">

                    <!-- Theme Color (Light/Dark) -->
                    <div class="topbar-item">
                        <button type="button" class="topbar-button" id="light-dark-mode">
                            <iconify-icon icon="solar:moon-bold-duotone" class="fs-24 align-middle"></iconify-icon>
                        </button>
                    </div>

                    <!-- Notification -->
                    <div class="dropdown topbar-item">
                        <button type="button" class="topbar-button position-relative"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <iconify-icon icon="solar:bell-bing-bold-duotone"
                                class="fs-24 align-middle"></iconify-icon>
                            <span
                                class="position-absolute topbar-badge fs-10 translate-middle badge bg-danger rounded-pill">3<span
                                    class="visually-hidden">unread messages</span></span>
                        </button>
                        <div class="dropdown-menu py-0 dropdown-lg dropdown-menu-end"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="text-dark text-decoration-underline">
                                            <small>Clear All</small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 280px;">
                                <!-- Item -->
                                <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom text-wrap">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://esde.com"
                                                class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-1" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0"><span class="fw-medium">Josephine Thompson
                                                </span>commented on admin panel <span>" Wow 😍! this admin looks
                                                    good and awesome design"</span></p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Item -->
                                <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm me-2">
                                                <span
                                                    class="avatar-title bg-soft-info text-info fs-20 rounded-circle">
                                                    D
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-semibold">Donoghue Susan</p>
                                            <p class="mb-0 text-wrap">
                                                Hi, How are you? What about our next meeting
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Item -->
                                <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://esde.com"
                                                class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-3" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-semibold">Jacob Gines</p>
                                            <p class="mb-0 text-wrap">Answered to your comment on the cash flow
                                                forecast's graph 🔔.</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Item -->
                                <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <div class="avatar-sm me-2">
                                                <span
                                                    class="avatar-title bg-soft-warning text-warning fs-20 rounded-circle">
                                                    <iconify-icon
                                                        icon="iconamoon:comment-dots-duotone"></iconify-icon>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-semibold text-wrap">You have received <b>20</b> new
                                                messages in the
                                                conversation</p>
                                        </div>
                                    </div>
                                </a>
                                <!-- Item -->
                                <a href="javascript:void(0);" class="dropdown-item py-3 border-bottom">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0">
                                            <img src="http://esde.com"
                                                class="img-fluid me-2 avatar-sm rounded-circle" alt="avatar-5" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-semibold">Shawn Bunch</p>
                                            <p class="mb-0 text-wrap">
                                                Commented on Admin
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center py-3">
                                <a href="javascript:void(0);" class="btn btn-primary btn-sm">View All Notification
                                    <i class="bx bx-right-arrow-alt ms-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- User -->
                    <div class="dropdown topbar-item">
                        <a type="button" class="topbar-button" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-flex align-items-center">
                                <img class="rounded-circle" width="32" src="avatar1" alt="avatar-3">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <h6 class="dropdown-header">Welcome Gaston!</h6>
                            <a class="dropdown-item" href="pages-profile.html">
                                <i class="bx bx-user-circle text-muted fs-18 align-middle me-1"></i><span
                                    class="align-middle">Profile</span>
                            </a>
                            <a class="dropdown-item" href="apps-chat.html">
                                <i class="bx bx-message-dots text-muted fs-18 align-middle me-1"></i><span
                                    class="align-middle">Messages</span>
                            </a>

                            <a class="dropdown-item" href="pages-pricing.html">
                                <i class="bx bx-wallet text-muted fs-18 align-middle me-1"></i><span
                                    class="align-middle">Pricing</span>
                            </a>
                            <a class="dropdown-item" href="pages-faqs.html">
                                <i class="bx bx-help-circle text-muted fs-18 align-middle me-1"></i><span
                                    class="align-middle">Help</span>
                            </a>
                            <a class="dropdown-item" href="auth-lock-screen.html">
                                <i class="bx bx-lock text-muted fs-18 align-middle me-1"></i><span
                                    class="align-middle">Lock screen</span>
                            </a>

                            <div class="dropdown-divider my-1"></div>

                            {{-- <a class="dropdown-item text-danger" href="route('logout')" method="post">
                            <i class="bx bx-log-out fs-18 align-middle me-1"></i><span
                                class="align-middle">Logout</span>
                            </a> --}}

                            <form action="#" method="post" class="d-inline">
                                <button type="submit" class="dropdown-item text-danger"> <i
                                        class="bx bx-log-out fs-18 align-middle me-1"></i>
                                    <span class="align-middle"> Logout </span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- App Search-->
                    <form class="app-search d-none d-md-block ms-2">
                        <div class="position-relative">
                            <input type="search" class="form-control" placeholder="Search..."
                                autocomplete="off" value="">
                            <iconify-icon icon="solar:magnifer-linear" class="search-widget-icon"></iconify-icon>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== Topbar End ========== -->

    <!-- ========== App Side Menu Start ========== -->
    <div class="main-nav">
        <!-- Sidebar Logo -->
        <div class="logo-box">
            <a href="{{ route('dashboard') }}" class="logo-dark">
                <img src="logoSm" class="logo-sm" alt="logo sm">
                <img src="logoDark" class="logo-lg" alt="logo dark">
            </a>

            <a href="{{ route('dashboard') }}" class="logo-light">
                <img src="logoSm" class="logo-sm" alt="logo sm">
                <img src="logoLight" class="logo-lg" alt="logo light">
            </a>
        </div>

        <!-- Menu Toggle Button (sm-hover) -->
        <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
            <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone"
                class="button-sm-hover-icon"></iconify-icon>
        </button>

        <div class="scrollbar" data-simplebar>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="menu-title">General</li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Overview </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarProducts">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Items </span>
                    </a>
                    <div class="collapse" id="sidebarProducts">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="/admin/all-items"> All Items</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="route('admin.usedItems')"> Used Items </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="/admin/all-items"> Free Items </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="/admin/all-items"> Swap Items </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="/admin/all-items"> Bid Items </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarCategory">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Category & Section </span>
                    </a>
                    <div class="collapse" id="sidebarCategory">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="/admin/all-items"> All Sections </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="/admin/all-items"> All Category </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="category-add.html">Create</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarOrders">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Orders </span>
                    </a>
                    <div class="collapse" id="sidebarOrders">
                        <ul class="nav sub-navbar-nav">

                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="orders-list.html"> All Orders</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="order-detail.html"> Fulfilled </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="order-cart.html"> Pending </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="order-cart.html"> Returned </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="order-checkout.html"> Cancelled </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="order-checkout.html"> Rejected </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarInvoice">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:bill-list-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Invoices </span>
                    </a>
                    <div class="collapse" id="sidebarInvoice">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="invoice-list.html">List</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="invoice-details.html">Details</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="invoice-add.html">Create</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2"> Users </li>

                <li class="nav-item">
                    <a class="nav-link" href="pages-profile.html">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:users-group-two-rounded-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> All Users </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarRoles" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarRoles">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:checklist-minimalistic-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Roles & Permissions </span>
                    </a>
                    <div class="collapse" id="sidebarRoles">
                        <ul class="nav sub-navbar-nav">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="role-list.html"> List </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="role-add.html"> Create </a>
                                </li>
                            </ul>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarSellers">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:shop-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Sellers </span>
                    </a>
                    <div class="collapse" id="sidebarSellers">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="seller-list.html"> List </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="seller-add.html"> Create </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title mt-2">Other</li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarCoupons">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Coupons </span>
                    </a>
                    <div class="collapse" id="sidebarCoupons">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="coupons-list.html">List</a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="coupons-add.html">Add</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="pages-review.html">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Reviews </span>
                    </a>
                </li>



                <li class="menu-title mt-2">Support</li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarHelpCenter" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarHelpCenter">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:help-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> Help Center </span>
                    </a>
                    <div class="collapse" id="sidebarHelpCenter">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="coupons-list.html"> List </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="coupons-add.html"> Add </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-arrow" href="#sidebarFaqs" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarFaqs">
                        <span class="nav-icon">
                            <iconify-icon icon="solar:question-circle-bold-duotone"></iconify-icon>
                        </span>
                        <span class="nav-text"> FAQs </span>
                    </a>
                    <div class="collapse" id="sidebarFaqs">
                        <ul class="nav sub-navbar-nav">
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="coupons-list.html"> List </a>
                            </li>
                            <li class="sub-nav-item">
                                <a class="sub-nav-link" href="coupons-add.html"> Add </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- ========== App Menu End ========== -->


    <!-- Start right Content here -->

    <div class="page-content">



        @yield('content')

        <!-- ========== Footer Start ========== -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- <script>
                            document.write(new Date().getFullYear())
                        </script> -->
                        &copy; Gudpanda. Crafted by
                        <iconify-icon icon="iconamoon:heart-duotone"
                            class="fs-18 align-middle text-danger"></iconify-icon> <a href="#"
                            class="fw-bold footer-text" target="_blank"> WI-FI </a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- ========== Footer End ========== -->

    </div>
    <!-- ==================================================== -->
    <!-- End Page Content -->
    <!-- ==================================================== -->

</div>


<!-- Theme Config js (Require in all Page) -->
<script src="{{ asset('dashboard/js/config.js') }}"></script>

<!-- Vendor Javascript (Require in all Page) -->
<script src="{{asset('dashboard/js/vendor.js')}}"></script>

<!-- App Javascript (Require in all Page) -->
<script src="{{asset('dashboard/js/app.js')}}"></script>

<!-- Vector Map Js -->
<script src="{{asset('dashboard/vendor/jsvectormap/js/jsvectormap.min.js')}}"></script>
<script src="{{asset('dashboard/vendor/jsvectormap/maps/world-merc.js')}}"></script>
<script src="{{asset('dashboard/vendor/jsvectormap/maps/world.js')}}"></script>

<!-- Dashboard Js -->
<script src="{{asset('dashboard/js/pages/dashboard.js')}}"></script>

</body>

</html>
