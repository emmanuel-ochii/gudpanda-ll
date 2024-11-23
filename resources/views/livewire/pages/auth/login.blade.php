<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;
use App\Models\User;
// use Illuminate\Support\Facades\Auth;

new #[Layout('layouts.auth')] class extends Component {
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        // Retrieve the authenticated user
        $user = Auth::user();

        if ($user->role === User::ROLE_ADMIN) {
            $this->redirectIntended(default: route('admin.dashboard', absolute: false), navigate: true);
        } elseif ($user->role === User::ROLE_SELLER) {
            $this->redirectIntended(default: route('seller.dashboard', absolute: false), navigate: true);
        } elseif ($user->role === User::ROLE_VENDOR) {
            $this->redirectIntended(default: route('vendor.dashboard', absolute: false), navigate: true);
        } else {
            $this->redirectIntended(default: route('customer.dashboard', absolute: false), navigate: true); // Default to customer
        }
    }
}; ?>

<div>

    <section class="page-header">
        <x-bg-page-header />

        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Account Login</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/">
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Account Login</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="login-wrap text-center">
                <h3 class="title mb-6"> Login Into Your Account </h3>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                {{-- @if ($status)
                    <div {{ $attributes->merge(['class' => 'alert alert-success']) }}>
                        {{ $status }}
                    </div>
                @endif --}}

                <form wire:submit="login" class="login-form">

                    <div class="form-item">
                        <h4 class="form-header"> Username or email address </h4>

                        <input type="email" wire:model="form.email" class="form-control" autocomplete="email" required
                            placeholder="Enter your email" />

                        @error('form.email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-item">
                        <h4 class="form-header"> Password* </h4>

                        <input type="password" class="form-control" wire:model="form.password" required
                            autocomplete="current-password" />


                        @error('form.password')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-item">
                        <div class="checkbox-wrap">
                            <input type="checkbox" wire:model="form.remember" />
                            <label for="remember"> Remember me </label><br />
                        </div>
                    </div>

                    <div class="submit-btn mt-4">
                        <button type="submit" class="rr-primary-btn" wire:loading.attr="disabled">
                            <span wire:loading> Logging in... </span>
                            <span wire:loading.remove> Login Account </span>
                        </button>
                    </div>


                    <div class="login-btn-wrap">
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="forgot" wire:navigate> Lost your password?
                            </a>
                        @endif
                        OR
                        <a class="log-in" href="/register" wire:navigate> Register </a>
                    </div>

                </form>

            </div>
        </div>
    </section>

</div>
