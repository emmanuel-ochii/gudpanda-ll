@extends('layouts.frontend')

@section('title', 'Checkout | Gudpanda')

@section('content')
    <section class="page-header">
        <x-bg-page-header />
        <div class="container">
            <div class="page-header-content">
                <h1 class="title"> Checkout </h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/" wire:navigate>
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span> Checkout </span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="checkout-section pt-100 pb-100">
        <div class="container">

            <div class="checkout-top">
                <div class="coupon-list">
                    <div class="verify-item mb-30">
                        <h4 class="title">Returning customers?<button type="button"
                                class="rr-checkout-login-form-reveal-btn">Click here</button> to login</h4>
                        <div id="rrReturnCustomerLoginForm" class="login-form">
                            <form action="mail.php">
                                <input type="text" id="fullname" name="fullname" class="form-control"
                                    placeholder="Your Name">
                                <input type="text" id="password" name="password" class="form-control"
                                    placeholder="Password">
                            </form>
                            <div class="checkbox-wrap">
                                <div class="checkbox-item">
                                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                                    <label for="vehicle3">Remember Me</label>
                                </div>
                                <a href="#" class="forgot">Forgot Password?</a>
                            </div>
                            <button class="rr-primary-btn">Login</button>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Billing Details -->
            @livewire('checkout')

        </div>
    </section>
    <!-- ./ checkout-section -->

@endsection
