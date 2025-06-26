@extends('layouts.frontend')

@section('title', 'My Cart | Gudpanda')

@section('content')
 <section class="page-header">
        <x-bg-page-header />
        <div class="container">
            <div class="page-header-content">
                <h1 class="title"> Cart </h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/" wire:navigate>
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Cart</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    @livewire('my-cart')
    <!-- ./ cart-section -->
    
@endsection
