<div class="auth-container mt-5">
    <div class="auth">
        <div class="container {{ $signedup ? 'right-panel-active' : '' }}" id="container">
            <div class="form-container sign-up-container">
                <form wire:submit.prevent="register">
                    <h1>Create Account</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registration</span>
                    <input type="text" id="name" wire:model="name" placeholder="Name" class="form-control">
                    @error('name')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <input type="email" id="email" wire:model="email" placeholder="Email" class="form-control">
                    @error('email')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <input type="password" id="password" wire:model="password" placeholder="Password"
                        class="form-control">
                    @error('password')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <input type="password" id="password_confirmation" placeholder="Confirm Password"
                        wire:model="password_confirmation" class="form-control">
                    @error('password_confirmation')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <button type="submit" class="mt-2">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form wire:submit.prevent="login">
                    <h1>Sign in</h1>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your account</span>
                    @if (session()->has('error'))
                        <div class="alert alert-danger w-100"><i class="fa-solid fa-triangle-exclamation"></i>
                            {{ session('error') }}</div>
                    @endif
                    <input type="email" id="signinemail" wire:model="signinemail" placeholder="Email"
                        class="form-control">
                    @error('signinemail')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <input type="password" id="signinpassword" placeholder="Password" wire:model="signinpassword"
                        class="form-control">
                    @error('signinpassword')
                        <span class="text-danger fs-6">{{ $message }}</span>
                    @enderror
                    <a href="#">Forgot your password?</a>
                    <button type="submit">Sign In</button>
                </form>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Get Started with Nexus!</h1>
                        <p>Sign up now to begin your journey and take control of your tasks.</p>
                        <button class="ghost" wire:click="$set('signedup', false)" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Welcome Back!</h1>
                        <p>Log in to your account and continue managing your tasks efficiently.</p>
                        <button class="ghost" wire:click="$set('signedup', true)" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
        <p class="company_owner">Are you a company owner? We've got a dedicated space just for you!
            <a class="text-decoration-underline" href="{{ route('login-company') }}">click here</a>
        </p>
    </div>
</div>
