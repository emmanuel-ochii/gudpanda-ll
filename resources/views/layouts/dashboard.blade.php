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
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('guest/img/favicon.png') }}">

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
        <livewire:layout.auth-nav />
        <!-- ========== Topbar End ========== -->

        <!-- ========== App Side Menu Start ========== -->
        <div class="main-nav">
            <!-- Sidebar Logo -->
            <div class="logo-box">
                <a href="{{ route('dashboard') }}" class="logo-dark">
                    <img src="{{ asset('dashboard/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="logoDark" class="logo-lg" alt="logo dark">
                </a>

                <a href="{{ route('dashboard') }}" class="logo-light">
                    <img src="{{ asset('dashboard/images/logo-sm.png') }}" class="logo-sm" alt="logo sm">
                    <img src="{{ asset('guest/img/logo/logo-light.png') }}" class="logo-lg" alt="logo light">
                </a>
            </div>

            <!-- Menu Toggle Button (sm-hover) -->
            <button type="button" class="button-sm-hover" aria-label="Show Full Sidebar">
                <iconify-icon icon="solar:double-alt-arrow-right-bold-duotone" class="button-sm-hover-icon">
                </iconify-icon>
            </button>

            <div class="scrollbar" data-simplebar>

                @if (Auth::user()->hasRole('admin'))
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
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProducts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Items </span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Items</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="route('admin.usedItems')"> Used Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Free Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Swap Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Bid Items </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCategory">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Category & Section </span>
                        </a>
                        <div class="collapse" id="sidebarCategory">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Sections </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('admin.category')}}"> All Category </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('admin.addCategory')}}">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
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
                        <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarInvoice">
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
                        <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarSellers">
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
                        <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCoupons">
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
                        <a class="nav-link menu-arrow" href="#sidebarHelpCenter" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarHelpCenter">
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
                @endif

                @if (Auth::user()->hasRole('manager'))
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
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProducts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Items </span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Items</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="route('admin.usedItems')"> Used Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Free Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Swap Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Bid Items </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCategory">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Category & Section </span>
                        </a>
                        <div class="collapse" id="sidebarCategory">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Sections </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Category </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-add.html">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
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
                        <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarInvoice">
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
                        <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarSellers">
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
                        <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCoupons">
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
                        <a class="nav-link menu-arrow" href="#sidebarHelpCenter" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarHelpCenter">
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
                @endif

                @if (Auth::user()->hasRole('vendor'))
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title">General</li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('vendor.dashboard') }}" wire:navigate>
                            <span class="nav-icon">
                                <iconify-icon icon="solar:widget-5-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Overview </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProducts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Items Management </span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('vendor.allItems')}}"> All Items</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="{{route('vendor.addItem')}}"> Add New Item </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Manage Items </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:bag-smile-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Orders </span>
                        </a>
                        <div class="collapse" id="sidebarOrders">
                            <ul class="nav sub-navbar-nav">

                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Orders</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Fulfilled </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Pending </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Returned </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Cancelled </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Rejected </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title mt-2">Other</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCoupons">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:leaf-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Coupons/Promotions </span>
                        </a>
                        <div class="collapse" id="sidebarCoupons">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="coupons-list.html"> Manage Coupons </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="coupons-add.html">Add New Coupon/Promotion </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:chat-square-like-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Reviews </span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:dollar-minimalistic-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Payments </span>
                        </a>
                    </li>



                    <li class="menu-title mt-2">Support</li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarHelpCenter" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarHelpCenter">
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
                @endif

                @if (Auth::user()->hasRole('customer'))
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
                        <a class="nav-link menu-arrow" href="#sidebarProducts" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarProducts">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:t-shirt-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Items </span>
                        </a>
                        <div class="collapse" id="sidebarProducts">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Items</a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="route('admin.usedItems')"> Used Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Free Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Swap Items </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> Bid Items </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarCategory" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCategory">
                            <span class="nav-icon">
                                <iconify-icon icon="solar:clipboard-list-bold-duotone"></iconify-icon>
                            </span>
                            <span class="nav-text"> Category & Section </span>
                        </a>
                        <div class="collapse" id="sidebarCategory">
                            <ul class="nav sub-navbar-nav">
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Sections </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="#"> All Category </a>
                                </li>
                                <li class="sub-nav-item">
                                    <a class="sub-nav-link" href="category-add.html">Create</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-arrow" href="#sidebarOrders" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarOrders">
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
                        <a class="nav-link menu-arrow" href="#sidebarInvoice" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarInvoice">
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
                        <a class="nav-link menu-arrow" href="#sidebarSellers" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarSellers">
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
                        <a class="nav-link menu-arrow" href="#sidebarCoupons" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarCoupons">
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
                        <a class="nav-link menu-arrow" href="#sidebarHelpCenter" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarHelpCenter">
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
                @endif


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
                            <iconify-icon icon="iconamoon:heart-duotone" class="fs-18 align-middle text-danger">
                            </iconify-icon> <a href="#" class="fw-bold footer-text" target="_blank"> WI-FI </a>
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
    <script src="{{ asset('dashboard/js/vendor.js') }}"></script>

    <!-- App Javascript (Require in all Page) -->
    <script src="{{ asset('dashboard/js/app.js') }}"></script>

    <!-- Vector Map Js -->
    <script src="{{ asset('dashboard/vendor/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/jsvectormap/maps/world.js') }}"></script>

    <!-- Dashboard Js -->
    <script src="{{ asset('dashboard/js/pages/dashboard.js') }}"></script>

</body>

</html>
