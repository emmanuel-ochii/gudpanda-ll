<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.auth')] class extends Component {
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        event(new Registered(($user = User::create($validated))));

        Auth::login($user);

        $this->redirect(route('customer.dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>

    <section class="page-header">
        <x-bg-page-header />

        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Account Registration</h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/">
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Account Registration</span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="login-wrap text-center">
                <h3 class="title mb-6"> Create Your Account </h3>
                <a href="#" class="google-login"> <img src="{{asset('guest/img/icon/google.png')}}" alt="google"> Login with Google </a>
                <span class="or-text">OR</span>

                <form wire:submit="register" class="login-form">

                    <div class="form-item">
                        <h4 class="form-header"> Fullname </h4>

                        <input type="text" wire:model="name" class="form-control" required autofocus
                            autocomplete="name" placeholder="Enter your fullname" />

                        @error('name')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-item">
                        <h4 class="form-header"> Email </h4>

                        <input type="email" wire:model="email" class="form-control" required autofocus
                            autocomplete="email" placeholder="Enter your email" />

                        @error('email')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-item">
                        <h4 class="form-header"> Password* </h4>

                        <input type="password" class="form-control" wire:model="password" type="password"
                            name="password" required autocomplete="new-password" />


                        @error('password')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-item">
                        <h4 class="form-header"> Password* </h4>

                        <input type="password" class="form-control" wire:model="password_confirmation" type="password"
                            name="password_confirmation" required autocomplete="new-password" />

                        @error('password_confirmation')
                            <span class="text-danger mt-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-item">
                        <div class="checkbox-wrap">
                            <input type="checkbox" id="accept_terms" name="accept_terms" value="Bike">
                            <label for="accept_terms"> I accept the <span>Terms / Privacy Policy</span></label><br>
                        </div>
                    </div>

                    <div class="submit-btn mt-4">
                        <button type="submit" class="rr-primary-btn" wire:loading.attr="disabled">
                            <span wire:loading> Creating Account... </span>
                            <span wire:loading.remove> Register Account </span>
                        </button>
                    </div>

                    <div class="login-btn-wrap">
                        <a href="#" class="forgot">Already have an account?</a>
                        <a class="log-in" href="{{ route('login') }}" wire:navigate>Log in</a>
                    </div>

                </form>

            </div>
        </div>
    </section>
</div>
