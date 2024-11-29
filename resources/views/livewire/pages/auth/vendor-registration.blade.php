<?php

use App\Models\User;
use App\Models\Vendor;
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
    public string $vendor_name = '';
    public string $vendor_phone_no = '';

    /**
     * Handle an incoming registration request.
     */
    // public function register(): void
    // {
    //     $validated = $this->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
    //         'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
    //         'vendor_name' => ['required', 'string', 'max:255'],
    //         'vendor_phone_no' => ['required', 'regex:/^[0-9]{10,15}$/'],
    //     ]);

    //     $validated['password'] = Hash::make($validated['password']);

    //     // Create user (basic info)
    //     $user = User::create([
    //         'name' => $validated['name'],
    //         'email' => $validated['email'],
    //         'password' => $validated['password'],
    //     ]);

    //     // Dispatch the Registered event
    //     event(new Registered(($user = User::create($validated))));

    //     // Create vendor (additional vendor-specific info)
    //     Vendor::create([
    //         'user_id' => $user->id, // Associate vendor with user
    //         'vendor_name' => $validated['vendor_name'],
    //         'vendor_phone_no' => $validated['vendor_phone_no'],
    //     ]);

    //     Auth::login($user);

    //     $this->redirect(route('Vendor.dashboard', absolute: false), navigate: true);
    // }

    public function register(): void
    {
        // Validate the incoming data
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'], // Ensure uniqueness
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            'vendor_name' => ['required', 'string', 'max:255'],
            'vendor_phone_no' => ['required', 'regex:/^[0-9]{10,15}$/'], // Ensure valid phone number
        ]);

        // Hash the password before storing
        $validated['password'] = Hash::make($validated['password']);

        try {
            // Start a database transaction
            \DB::beginTransaction();

            // Create the user for authentication purposes
            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $validated['password'],
            ]);

            // Create the vendor details in the vendors table
            Vendor::create([
                'user_id' => $user->id, // Associate with the user
                'vendor_name' => $validated['vendor_name'],
                'vendor_phone_no' => $validated['vendor_phone_no'],
            ]);

            // Dispatch the Registered event
            event(new Registered($user));

            // Log in the user
            Auth::login($user);
            // auth()->login($user);

            // Commit the transaction
            \DB::commit();

            // Redirect to the vendor dashboard
            $this->redirect(route('vendor.dashboard'), navigate: true);
        } catch (QueryException $e) {
            // Roll back the transaction in case of any failure
            \DB::rollBack();

            // Handle duplicate email error gracefully
            if ($e->errorInfo[1] == 1062) {
                // Duplicate entry error code
                $this->addError('email', 'This email is already registered.');
            } else {
                // Rethrow the exception for other errors
                throw $e;
            }
        }
    }
};
?>

<div>

    <section class="page-header">
        <x-bg-page-header />

        <div class="container">
            <div class="page-header-content">
                <h1 class="title">Vendor Registration Form </h1>
                <h4 class="sub-title">
                    <span class="home">
                        <a href="/">
                            <span>Home</span>
                        </a>
                    </span>
                    <span class="icon"><i class="fa-solid fa-angle-right"></i></span>
                    <span class="inner">
                        <span>Vendor Registration </span>
                    </span>
                </h4>
            </div>
        </div>
    </section>
    <!-- ./ page-header -->

    <section class="login-area pt-60 pb-100">
        <div class="container">
            <div class="login-wrap text-center" style="max-width: 850px">
                <h3 class="title" style="margin-bottom: 30px"> Vendor Registration Form </h3>

                <form wire:submit="register" class="login-form row">
                    <!-- Column 1 -->

                    <p>Basic Information</p>

                    <div class="col-lg-6 col-md-12">
                        <div class="form-item">
                            <h4 class="form-header"> Business name </h4>
                            <input type="text" wire:model="name" class="form-control" required autofocus
                                autocomplete="name" placeholder="Enter your fullname" />
                            @error('name')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-item">
                            <h4 class="form-header"> Password </h4>
                            <input type="password" class="form-control" wire:model="password" name="password" required
                                autocomplete="new-password" placeholder="Enter your password" />

                            @error('password')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-item">
                            <h4 class="form-header"> Vendor Name </h4>
                            <input type="text" class="form-control" wire:model="vendor_name" name="vendor_name"
                                required />

                            @error('vendor_name')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-item">
                            <div class="checkbox-wrap">
                                <input type="checkbox" id="accept_terms" name="accept_terms" required>
                                <label for="accept_terms"> I accept the <span>Terms / Privacy Policy</span></label>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-lg-6 col-md-12">
                        <div class="form-item">
                            <h4 class="form-header"> Email </h4>
                            <input type="email" wire:model="email" class="form-control" required autocomplete="email"
                                placeholder="Enter your email" />
                            @error('email')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-item">
                            <h4 class="form-header"> Confirm Password </h4>
                            <input type="password" class="form-control" wire:model="password_confirmation"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Confirm your password" />
                            @error('password_confirmation')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-item">
                            <h4 class="form-header"> Vendor Phone No. </h4>
                            <input type="text" class="form-control" wire:model="vendor_phone_no"
                                name="vendor_phone_no" required />

                            @error('vendor_phone_no')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="submit-btn">
                            <button type="submit" class="rr-primary-btn" wire:loading.attr="disabled">
                                <span wire:loading> Creating Account... </span>
                                <span wire:loading.remove> Register Account </span>
                            </button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </section>
</div>
